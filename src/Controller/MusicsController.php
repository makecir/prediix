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
        $this->loadComponent('CSVJ');
        #$musics = $this->paginate($this->Musics);
        $musics = $this->paginate($this->Musics);
        $this->set(compact('musics'));

        $session = $this->getRequest()->getSession();
        if(!$session->check('rating')){
             $session->write('rating', 1500.0000000);
        }
        $rating=$session->read('rating');
        $this->set(compact('rating'));

        $csvform = new CSVForm();
        $this->set(compact('csvform'));
        $csv_data = $this->request->getData('upload-csv');
        if (!is_null($csv_data)) {
            #$this->set(compact('csv_data'));
            $result = $this->CSVJ->read($csv_data,$this->getColNameDict()); 
            $this->getRating($result,$rating);
            $session->write('rating', $rating);
            $this->set(compact('rating'));
            $this->redirect(['action' => 'skill']);
        }
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
        #$this->set(compact('player'));

        //対戦
        $this->loadModel('Playdatas');
        $win_player=0;
        $total=0;
        $query=$this->Playdatas->find('all');
        foreach($query as $playdata){
            $win=0;
            foreach($player as $col => $dat){
                if($playdata[$col]==0)continue;
                else if($playdata[$col]==2)$playdata[$col]=1;
                if($dat>$playdata[$col])$win++;
                if($dat<$playdata[$col])$win--;
            }
            if($win>0)$win_player++;
            if($win<0)$win_player--;
            $total+=1;
        }
        // 自分と戦い、引き分ける
        $total+=1;

        //#イロレーティングに換算
        $reswin=($win_player+$total)/2.0;
        $rating= 400*log10( $reswin / ($total-$reswin))+1500;

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
        "ASSITED EASY"=>1,
        "EASY CLEAR"=>3,
        "CLEAR"=>4,
        "HARD CLEAR"=>5,
        "EX HARD CLEAR"=>6,
        "FULLCOMBO CLEAR"=>7,
        ];
        return $res;
    }

    public function rateReset(){
        $session = $this->getRequest()->getSession();
        if($session->check('rating')){
            $session->write('rating', 1500.0000000);
       }
       $this->redirect(['action' => 'skill']);
    }

    /**
     * View method
     *
     * @param string|null $id Music id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $music = $this->Musics->get($id, [
            'contain' => [],
        ]);
        
        $this->set('music', $music);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $music = $this->Musics->newEmptyEntity();
        if ($this->request->is('post')) {
            $music = $this->Musics->patchEntity($music, $this->request->getData());
            if ($this->Musics->save($music)) {
                $this->Flash->success(__('The music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The music could not be saved. Please, try again.'));
        }
        $this->set(compact('music'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Music id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $music = $this->Musics->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $music = $this->Musics->patchEntity($music, $this->request->getData());
            if ($this->Musics->save($music)) {
                $this->Flash->success(__('The music has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The music could not be saved. Please, try again.'));
        }
        $this->set(compact('music'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Music id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $music = $this->Musics->get($id);
        if ($this->Musics->delete($music)) {
            $this->Flash->success(__('The music has been deleted.'));
        } else {
            $this->Flash->error(__('The music could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
