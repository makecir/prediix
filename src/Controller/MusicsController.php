<?php
declare(strict_types=1);

namespace App\Controller;
use App\Form\CSVForm;

/**
 * Musics Controller
 *
 * @property \App\Model\Table\MusicsTable $Musics
 *
 * @method \App\Model\Entity\Music[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MusicsController extends AppController
{

    public $paginate = array (
        'limit' => 5000,
        'maxLimit' => 5000,
    );

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $musics = $this->paginate($this->Musics);

        $this->set(compact('musics'));
    }

    public function skill()
    {
        $test=$this->request->getData();
        $this->set(compact('test'));

        $this->loadComponent('CSVJ');
        #$musics = $this->paginate($this->Musics);
        $musics = $this->paginate($this->Musics);
        $this->set(compact('musics'));

        $session = $this->getRequest()->getSession();
        if(!$session->check('rating')){
             $session->write('rating', 1500.0000);
        }
        $rating=$session->read('rating');
        $this->set(compact('rating'));

        $csvform = new CSVForm();
        $this->set(compact('csvform'));
        $csv_data = $this->request->getData('upload-csv');
        $text_data = $this->request->getData('upload-text');

        // $this->set(compact('text_data'));
        // $tmp=$this->request->getData();
        // $this->set(compact('tmp'));

        if (!is_null($csv_data)) {
            #$this->set(compact('csv_data'));
            $result = $this->CSVJ->read($csv_data,$this->getColNameDict()); 
            $this->getRating($result,$rating);
            $session->write('rating', $rating);
            $this->set(compact('rating'));
            $this->redirect(['action' => 'skill']);
        }
        else if ($text_data!="") {
            $text_data=nl2br($text_data);
            $result = $this->getResultFromText($text_data); 
            $this->getRating($result,$rating);
            $session->write('rating', $rating);
            $this->set(compact('rating'));
            $this->redirect(['action' => 'skill']);
        }
        
        // 推定表作る
        if(!$session->check('player')){
            $session->write('player', []);
        }
        $player=$session->read('player');

        $savedat_str = $this->getSaveStr($rating,$player);
        $this->set(compact('savedat_str'));
        
        //作ってからソートしよ
        $dif_str_dict=["easy","clear","hard","exhard","fc"];
        $dif_disp_str_dict=["NO PLAY" ,"FAILED","ASSITED","EASY","CLEAR","HARD","EXHARD","FULLCOMBO"];
        $musics = $this->Musics->find('all')->toArray();
        $clear_ratings=[];
        foreach($musics as $music){
            if($music['title']=="Immortal")continue; //削除曲
            $lamp=0;
            $mid="m".$music['mid'];
            if (array_key_exists($mid,$player)){
                $lamp=$player[$mid];
            }
            for($i=0;$i<5;++$i){
                if($lamp>=$i+3)continue;
                // 1/(1+e^(-(Intercept+coefficient*(レート))))
                $pred=1/(1+M_E**(-($music[$dif_str_dict[$i].'_intercept']+$music[$dif_str_dict[$i].'_coefficient']*($rating))));
                // if($i==5 && $music['title']=="X-DEN") $pred=1/(1+M_E**(-($music[$dif_str_dict[$i].'_intercept']+$music[$dif_str_dict[$i].'_coefficient']*($rating))));
                // else{
                //     $pred=1/(1+M_E**(-($music[$dif_str_dict[$i].'_intercept']+$music[$dif_str_dict[$i].'_coefficient']*($rating))));
                // }
                $clear_ratings[]=['title'=>$music['title'],
                    'version'=>$music['version'],
                    'my_lamp'=>$dif_disp_str_dict[$lamp],
                    'target_lamp'=>$dif_disp_str_dict[$i+3],
                    'clear_rate'=>$pred
                ];
            }
        }
        $this->set(compact('clear_ratings'));
        $l2c_dict=$this->getColorDict();
        $this->set(compact('l2c_dict'));
        $player_rank=$this->getTopRate($rating);
        $this->set(compact('player_rank'));
    }


    public function getRating(&$result,&$rating){

        //musiIdのdict作成

        $t2i_dict=$this->getMusicIdDict();
        #$this->set(compact('t2i_dict'));
        $s2n_dict=$this->getClearDict();
        #$this->set(compact('s2n_dict'));

        //resultから対戦しやすいように成形 playerを作る
        $player=[];
        foreach($result["records"] as $record){
            // 灰
            if((string)$record[0]=="HEROIC VERSE")continue;
            if((string)$record[1]=="Immortal")continue;
            if($record[19]==12){
                $clear=$s2n_dict[(string)$record[24]];
                if($clear!=0){
                    #$musicid=getMusicId($record[1],"h");
                    $title=$record[1]."[H]";
                    if(array_key_exists($title, $t2i_dict)){
                        $musicid=$t2i_dict[$title];
                        $player[$musicid]=$clear;
                    }
                }
            }
            // 穴
            if($record[26]==12){
                $clear=$s2n_dict[(string)$record[31]];
                if($clear!=0){
                    #$musicid=getMusicId($record[1],"h");
                    $title=$record[1];
                    if($record[1]=="gigadelic"||$record[1]=="Innocent Walls"){
                        $title=$record[1]."[A]";
                    }
                    if(array_key_exists($title, $t2i_dict)){
                        $musicid=$t2i_dict[$title];
                        $player[$musicid]=$clear;
                    }
                }
            }
            // LEGGENDARIA
            if($record[33]==12){
                $clear=$s2n_dict[(string)$record[38]];
                if($clear!=0){
                    #$musicid=getMusicId($record[1],"h");
                    $title=$record[1]."†";
                    if($title=="Ancient Scapes†"
                        || $title=="Close the World feat.a☆ru†"
                        || $title=="Feel The Beat†"
                        || $title=="invoker†"
                        || $title=="Sigmund†"
                        || $title=="Verflucht†"
                        || $title=="疾風迅雷†"
                        ){
                        $title=$title."LEGGENDARIA";
                    }
                    if(array_key_exists($title, $t2i_dict)){
                        $musicid=$t2i_dict[$title];
                        $player[$musicid]=$clear;
                    }
                }
            }
        }
        $this->getRequest()->getSession()->write('player', $player);

        //saveした後にassist を fail に
        foreach($player as $lamp){
            if($lamp==2)$lamp=1;
        }

        #$this->set(compact('player'));

        //対戦
        $this->loadModel('Playdatas');
        $win_player=0;
        $total=0;
        #$query=$this->Playdatas->find('all');
        $playdatas = $this->Playdatas->find('all')->toArray();
        $count_i = count($playdatas);
        $count_j = count($player);
        for($i = 0 ; $i < $count_i ; ++$i ){
            $win=0;
            foreach($player as $col => $dat){
                if($playdatas[$i][$col]===0)continue;
                if($playdatas[$i][$col]===2)$playdatas[$i][$col]=1;
                if($dat>$playdatas[$i][$col])$win++;
                if($dat<$playdatas[$i][$col])$win--;
            }
            unset($playdatas[$i]);
            if($win>0)$win_player++;
            if($win<0)$win_player--;
            $total+=1;
        }
        // 自分と戦い、引き分ける
        $total+=1;

        //#イロレーティングに換算
        $reswin=($win_player+$total)/2.0;

        //ok1973.0626 $rating= 400*log10( $reswin / ($total-$reswin-1) )+1500.0000;
        //ok1972.9837 $rating= 400.00*log10( $reswin / ($total-$reswin) )+1500.0000;
        //ok1972.9469
        $rating= 400.00*log10( $reswin / ($total-$reswin) )+1500.0000;
    }

    public function getColNameDict(){
        $res=[
            "バージョン"=>"ver",
            "タイトル"=>"title",
            "ジャンル"=>"genre",
            "アーティスト"=>"art",
            "プレー回数"=>"playcnt",
            "BEGINNER 難易度"=>"b_dif",
            "BEGINNER EXスコア"=>"b_ex",
            "BEGINNER PGreat"=>"b_pg",
            "BEGINNER Great"=>"b_g",
            "BEGINNER ミスカウント"=>"b_misscnt",
            "BEGINNER クリアタイプ"=>"b_clear",
            "BEGINNER DJ LEVEL"=>"b_level",
            "NORMAL 難易度"=>"n_dif",
            "NORMAL EXスコア"=>"n_ex",
            "NORMAL PGreat"=>"n_pg",
            "NORMAL Great"=>"n_g",
            "NORMAL ミスカウント"=>"n_misscnt",
            "NORMAL クリアタイプ"=>"n_clear",
            "NORMAL DJ LEVEL"=>"n_level",
            "HYPER 難易度"=>"h_dif",
            "HYPER EXスコア"=>"h_ex",
            "HYPER PGreat"=>"h_pg",
            "HYPER Great"=>"h_g",
            "HYPER ミスカウント"=>"h_misscnt",
            "HYPER クリアタイプ"=>"h_clear",
            "HYPER DJ LEVEL"=>"h_level",
            "ANOTHER 難易度"=>"a_dif",
            "ANOTHER EXスコア"=>"a_ex",
            "ANOTHER PGreat"=>"a_pg",
            "ANOTHER Great"=>"a_g",
            "ANOTHER ミスカウント"=>"a_misscnt",
            "ANOTHER クリアタイプ"=>"a_clear",
            "ANOTHER DJ LEVEL"=>"a_level",
            "LEGGENDARIA 難易度"=>"l_dif",
            "LEGGENDARIA EXスコア"=>"l_ex",
            "LEGGENDARIA PGreat"=>"l_pg",
            "LEGGENDARIA Great"=>"l_g",
            "LEGGENDARIA ミスカウント"=>"l_misscnt",
            "LEGGENDARIA クリアタイプ"=>"l_clear",
            "LEGGENDARIA DJ LEVEL"=>"l_level",
            "最終プレー日時"=>"last_play"
        ];
        return $res;
    }

    public function getMusicIdDict(){
        $res=[];
        $query=$this->Musics->find('all');
        foreach($query as $music){
            $key=(string)$music['title'];
            if($key=="カゴノトリ〜弐式〜")$key="カゴノトリ～弐式～";
            if($key=="PARANOiA 〜HADES〜")$key="PARANOiA ～HADES～";
            if($key=="quell〜the seventh slave〜")$key="quell～the seventh slave～";
            if($key=="†渚の小悪魔ラヴリィ〜レイディオ†(IIDX EDIT)")$key="†渚の小悪魔ラヴリィ～レイディオ†(IIDX EDIT)";
            if($key=="キャトられ恋はモ〜モク")$key="キャトられ恋はモ～モク";
            if($key=="Close the World feat. a☆ru")$key="Close the World feat.a☆ru";
            if($key=="Idola")$key="Idola ";
            if($key=="旋律のドグマ〜Miserables〜")$key="旋律のドグマ～Miserables～";
            if($key=="Rave*it!! Rave*it!!")$key="Rave*it!! Rave*it!! ";
            if($key=="Sounds Of Summer")$key="Sounds Of Summer ";
            if($key=="DORNWALD 〜Junge〜")$key="DORNWALD ～Junge～";
            if($key=="炎影")$key="火影";
            if($key=="DEATH†ZIGOQ 〜怒りの高速爆走野郎〜")$key="DEATH†ZIGOQ ～怒りの高速爆走野郎～";
            $res[$key]="m".(string)$music['mid'];
        }
        return $res;
    }

    public function getClearDict(){
        $res=["NO PLAY"=>0,
        "FAILED"=>1,
        "ASSIST CLEAR"=>2,
        "EASY CLEAR"=>3,
        "CLEAR"=>4,
        "HARD CLEAR"=>5,
        "EX HARD CLEAR"=>6,
        "FULLCOMBO CLEAR"=>7,
        "ASSIST EASY"=>2,
        ];
        return $res;
    }
    public function getColorDict(){
        //["NO PLAY" ,"FAILED","ASSITED","EASY","CLEAR","HARD","EXHARD","FULLCOMBO"];
        $res=["NO PLAY"=>"#FFFFFF",
        "FAILED"=>"#CCCCCC",
        "ASSITED"=>"#FF66CC",
        "EASY"=>"#99FF99",
        "CLEAR"=>"#99CCFF",
        "HARD"=>"#FF6666",
        "EXHARD"=>"#FFFF99",
        "FULLCOMBO"=>"#FF9966",
        ];
        return $res;
    }

    public function getTopRate(&$rating){
        //["NO PLAY" ,"FAILED","ASSITED","EASY","CLEAR","HARD","EXHARD","FULLCOMBO"];
        
        $dic=[1170 => 50,1180 => 49.4,1190 => 48.84,1200 => 48.25,1210 => 47.6,1220 => 46.89,1230 => 46.11,1240 => 45.6,1250 => 45,1260 => 44.44,1270 => 43.89,1280 => 43.33,1290 => 42.72,1300 => 42.13,1310 => 41.52,1320 => 40.91,1330 => 40.22,1340 => 39.55,1350 => 38.88,1360 => 38.17,1370 => 37.38,1380 => 36.68,1390 => 35.9,1400 => 35.17,1410 => 34.42,1420 => 33.61,1430 => 32.85,1440 => 32.09,1450 => 31.31,1460 => 30.53,1470 => 29.77,1480 => 29.03,1490 => 28.2,1500 => 27.38,1510 => 26.62,1520 => 25.8,1530 => 25.04,1540 => 24.24,1550 => 23.47,1560 => 22.72,1570 => 21.94,1580 => 21.22,1590 => 20.47,1600 => 19.72,1610 => 19.03,1620 => 18.35,1630 => 17.64,1640 => 16.97,1650 => 16.33,1660 => 15.68,1670 => 15.04,1680 => 14.41,1690 => 13.8,1700 => 13.23,1710 => 12.66,1720 => 12.1,1730 => 11.56,1740 => 11.04,1750 => 10.56,1760 => 10.05,1770 => 9.61,1780 => 9.15,1790 => 8.74,1800 => 8.31,1810 => 7.92,1820 => 7.52,1830 => 7.18,1840 => 6.83,1850 => 6.49,1860 => 6.18,1870 => 5.85,1880 => 5.56,1890 => 5.28,1900 => 5,1910 => 4.75,1920 => 4.51,1930 => 4.27,1940 => 4.05,1950 => 3.83,1960 => 3.64,1970 => 3.45,1980 => 3.28,1990 => 3.11,2000 => 2.92,2010 => 2.77,2020 => 2.63,2030 => 2.48,2040 => 2.36,2050 => 2.22,2060 => 2.08,2070 => 1.98,2080 => 1.88,2090 => 1.78,2100 => 1.67,2110 => 1.59,2120 => 1.52,2130 => 1.43,2140 => 1.35,2150 => 1.26,2160 => 1.19,2170 => 1.11,2180 => 1.06,2190 => 1.01,2200 => 0.94,2210 => 0.9,2220 => 0.84,2230 => 0.79,2240 => 0.75,2250 => 0.71,2260 => 0.68,2270 => 0.64,2280 => 0.6,2290 => 0.57,2300 => 0.53,2310 => 0.5,2320 => 0.47,2330 => 0.45,2340 => 0.43,2350 => 0.4,2360 => 0.37,2370 => 0.35,2380 => 0.33,2390 => 0.32,2400 => 0.29,2410 => 0.28,2420 => 0.26,2430 => 0.25,2440 => 0.23,2450 => 0.22,2460 => 0.21,2470 => 0.2,2480 => 0.19,2490 => 0.18,2500 => 0.17,2510 => 0.16,2520 => 0.15,2530 => 0.14,2540 => 0.13,2550 => 0.13,2560 => 0.12,2570 => 0.11,2580 => 0.11,2590 => 0.1,2600 => 0.09,2610 => 0.09,2620 => 0.09,2630 => 0.08,2640 => 0.08,2650 => 0.07,2660 => 0.07,2670 => 0.06,2680 => 0.06,2690 => 0.05,2700 => 0.05,2710 => 0.05,2720 => 0.05,2730 => 0.04,2740 => 0.04,2750 => 0.04,2760 => 0.04,2770 => 0.03,2780 => 0.03,2790 => 0.03,2800 => 0.03,2810 => 0.03,2820 => 0.03,2830 => 0.02,2840 => 0.02,2850 => 0.02,2860 => 0.02,2870 => 0.02,2880 => 0.02,2890 => 0.02,2900 => 0.02,2910 => 0.02,2920 => 0.01,2930 => 0.01,2940 => 0.01,2950 => 0.01,2960 => 0.01,2970 => 0.01,2980 => 0.01];
        $res=50.0;
        foreach($dic as $key => $value){
            if($key<=$rating)$res=$value;
        }
        return $res;
    }

    
    // public function getColorDict(){
    //     //["NO PLAY" ,"FAILED","ASSITED","EASY","CLEAR","HARD","EXHARD","FULLCOMBO"];
    //     $res=["NO PLAY"=>"light",
    //     "FAILED"=>"secondary",
    //     "ASSITED"=>"secondary",
    //     "EASY"=>"success",
    //     "CLEAR"=>"info",
    //     "HARD"=>"danger",
    //     "EXHARD"=>"warning",
    //     "FULLCOMBO"=>"primary"
    //     ];
    //     return $res;
    // }

    public function getResultFromText(&$text){
        $file=explode( '<br />', $text );
        $result=[];
        $result["columns"]=array();
        $result["records"]=array();

        foreach ($file as $i => $line) {
            mb_language("Japanese");
            $line=explode( ',', $line);
            if(count($line)<=1)continue;
            if($i === 0 ){//カラム名の処理
                $j=0;
                $line = mb_convert_encoding($line, "UTF-8", "UTF-8");
                foreach ($line as $element) {
                    #$element =  mb_convert_encoding($element, "UTF-8", "auto");
                    $element=explode( ',', $element );
                    foreach($element as $elem){
                        if($elem=="最終プレー日時\n"){
                            $elem="最終プレー日時";
                        }
                        $result["columns"][] = $elem;
                    }

                    #$result["columns"][] = $j2e_dict[$element]; //push_back
                    #$result["columns"][] = $element; //push_back
                    //if($element=="")$cname="dummy";
                    //else if($element=="ID")$cname="playerid";
                    //else if($element=="class")$cname="class";
                    //else $cname="m".(string)$element;
                    //$result["columns"][]=$cname;
                }
            }
            else{//カラム名を除くデータの処理
                $record = [];
                $line = mb_convert_encoding($line, "UTF-8", "UTF-8");
                foreach ($line as $element) {
                    $record[] = $element;
                }
                if (count($record) == 1 && empty($record[0])) {
                    continue;
                }
                $result["records"][] = $record; //push_back
            }
        }
        return $result;
    }

    public function getSaveStr(&$rating,&$player){
        $savedat=['rating'=>$rating,'player'=>$player];
        return json_encode($savedat);
    }

    public function dataSave(){
        $this->Flash->success(__('保存しました'));
        $this->redirect(['action' => 'skill']);
    }

    public function dataLoad(){
        $session = $this->getRequest()->getSession();
        $savedat=json_decode($this->request->getData('submit-load'),TRUE);
        if(!($savedat === [])){
            $session->write('rating', $savedat['rating']);
            $session->write('player', $savedat['player']);
        }
        $this->redirect(['action' => 'skill']);
    }

    public function dataClean(){
        $session = $this->getRequest()->getSession();
        $session->write('rating', 1500.0000);
        $session->write('player', []);
       $this->redirect(['action' => 'skill']);
    }

}
