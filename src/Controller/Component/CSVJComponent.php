<?php
namespace App\Controller\Component;
 
use Cake\Controller\Component;
use App\Form\CSVForm;
use \SplFileObject;
use Cake\ORM\TableRegistry;
 
class CSVJComponent extends Component
{
    public function read($csv_data,$j2e_dict){

        # $csv_data : $this->request->data['upload-csv'];
        # $j2e_dict : {"jpカラムネーム"=>"enカラムネーム"};
        # return $result : {"columns"=>["col1","col2","col3"],"records"=>[["a1","a2","a3"],["b1","b2","b3"],,,]};

        $csv_path = '../webroot/uploaded/'.$csv_data->getClientFilename();

        // ローカルに保存
        // move_uploaded_file($csv_data->getFile(),sprintf($csv_path,$csv_data->getClientFilename()));
        $csv_data->moveTo(sprintf($csv_path,$csv_data->getClientFilename()));

        chmod("../webroot/uploaded/" . $csv_data->getClientFilename(), 0644);
        $file = new SplFileObject($csv_path); 
        $file->setFlags(SplFileObject::READ_CSV);
        #unlink('../webroot/uploaded/'.$csv_data->name);
        unlink('../webroot/uploaded/'.$csv_data->getClientFilename());

        $result=[];
        $result["columns"]=array();
        $result["records"]=array();

        foreach ($file as $i => $line) {
            mb_language("Japanese");
            if($i === 0 ){//カラム名の処理
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
                    $element=explode( ',', $element);
                    foreach($element as $elem){
                        $record[] = $elem;
                    }
                }
                if (count($record) == 1 && empty($record[0])) {
                    continue;
                }
                $result["records"][] = $record; //push_back
            }
        }
        return $result;
    }
}