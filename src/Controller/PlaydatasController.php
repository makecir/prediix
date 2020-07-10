<?php
declare(strict_types=1);

namespace App\Controller;
use App\Form\CSVForm;
use \SplFileObject;
use Cake\ORM\TableRegistry;

/**
 * Playdatas Controller
 *
 * @property \App\Model\Table\PlaydatasTable $Playdatas
 *
 * @method \App\Model\Entity\Playdata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlaydatasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    // public function index()
    // {
    //     $playdatas = $this->paginate($this->Playdatas);

    //     $this->set(compact('playdatas'));
    // }

    /**
     * View method
     *
     * @param string|null $id Playdata id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function view($id = null)
    // {
    //     $playdata = $this->Playdatas->get($id, [
    //         'contain' => [],
    //     ]);

    //     $this->set('playdata', $playdata);
    // }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    // public function add()
    // {
    //     $playdata = $this->Playdatas->newEmptyEntity();
    //     if ($this->request->is('post')) {
    //         $playdata = $this->Playdatas->patchEntity($playdata, $this->request->getData());
    //         if ($this->Playdatas->save($playdata)) {
    //             $this->Flash->success(__('The playdata has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The playdata could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('playdata'));
    // }

    /**
     * Edit method
     *
     * @param string|null $id Playdata id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function edit($id = null)
    // {
    //     $playdata = $this->Playdatas->get($id, [
    //         'contain' => [],
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $playdata = $this->Playdatas->patchEntity($playdata, $this->request->getData());
    //         if ($this->Playdatas->save($playdata)) {
    //             $this->Flash->success(__('The playdata has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The playdata could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('playdata'));
    // }

    /**
     * Delete method
     *
     * @param string|null $id Playdata id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $playdata = $this->Playdatas->get($id);
    //     if ($this->Playdatas->delete($playdata)) {
    //         $this->Flash->success(__('The playdata has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The playdata could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
    
    //adcsvdata
    public function addcsv()
    {
        $this->loadComponent('CSV');
        $playdatas = $this->paginate($this->Playdatas);

        $this->set(compact('playdatas'));

        // CSV入力時
        $csvform = new CSVForm();
        $csv_data = $this->request->getData('upload-csv');
        if (!is_null($csv_data)) {
            $this->set(compact('csv_data'));
            $result = $this->CSV->read($csv_data,["a"=>"b"]); 
            
            $this->addresult($result);
        }
        $this->set(compact('csvform'));
        //return $this->redirect(['action' => 'addcsv']);
    }

    public function addresult(&$result)
    {
        foreach($result['records'] as $row){
            //$insert_row
            foreach($row as $i => $element){
                if($result['columns'][$i]=="dummy")continue;
                else $insert_row[$result['columns'][$i]]=$element;
            }
            $pd_puery = $this->Playdatas->query();
            $pd_puery->insert(array_keys($insert_row));
            $pd_puery->values($insert_row)->execute();
        }
        return $this->redirect(['action' => 'addcsv']);
    }

    //adcsvdata
    public function addcsvms()
    {
        $this->loadComponent('CSV');
        $playdatas = $this->paginate($this->Playdatas);

        $this->set(compact('playdatas'));

        // CSV入力時
        $csvform = new CSVForm();
        $csv_data = $this->request->getData('upload-csv');
        if (!is_null($csv_data)) {
            $this->set(compact('csv_data'));
            $result = $this->CSV->read($csv_data,["譜面ID"=>"mid",
                "楽曲名"=>"title",
                "バージョン"=>"version",
                "難易度"=>"difficult",
                "ノート数"=>"notes"
            ]); 
            
            //$this->addresult($result);
            $this->addmusic($result);
        }
        $this->set(compact('csvform'));
        //return $this->redirect(['action' => 'addcsv']);
    }

    public function addmusic(&$result)
    {
        $this->loadModel('Musics');
        foreach($result['records'] as $row){
            //$insert_row
            foreach($row as $i => $element){
                $insert_row[$result['columns'][$i]]=$element;
            }
            $pd_puery = $this->Musics->query();
            $pd_puery->insert(array_keys($insert_row));
            $pd_puery->values($insert_row)->execute();
        }
        return $this->redirect(['action' => 'addcsvms']);
    }

    // public function addcsvms()
    // {
    //     $this->loadComponent('CSV');
    //     $playdatas = $this->paginate($this->Playdatas);

    //     $this->set(compact('playdatas'));
	// }

    public function addcsvmsic()
    {
        $this->loadComponent('CSVJ');
        $playdatas = $this->paginate($this->Playdatas);

        $this->set(compact('playdatas'));
         // CSV入力時
         $csvform = new CSVForm();
         $csv_data = $this->request->getData('upload-csv');
         if (!is_null($csv_data)) {
             $this->set(compact('csv_data'));
             $result = $this->CSVJ->read($csv_data,["譜面ID"=>"mid",
                "楽曲名"=>"title",
                "EASY_Intercept"=>"easy_intercept",
                "EASY_coefficient"=>"easy_coefficient",
                "CLEAR_Intercept"=>"clear_intercept",
                "CLEAR_coefficient"=>"clear_coefficient",
                "HARD_Intercept"=>"hard_intercept",
                "HARD_coefficient"=>"hard_coefficient",
                "EXHARD_Intercept"=>"exhard_intercept",
                "EXHARD_coefficient"=>"exhard_coefficient",
                "FC_Intercept"=>"fc_intercept",
                "FC_coefficient"=>"fc_coefficient"
            ]); 
            
            $this->set(compact('result'));
            $this->addmusicic($result);
        }
        $this->set(compact('csvform'));
        //return $this->redirect(['action' => 'addcsv']);
    }

    public function addmusicic(&$result)
    {
        $this->loadModel('Musics');
        $id=0;
        $tmp;

        foreach($result['records'] as $row){
            $id++;
            //if($id>200)continue;
            $music = $this->Musics->get($id, [
                'contain' => []
            ]);
            while($music["mid"]!=$row['0']){
                 $id++;
                 $music = $this->Musics->get($id, [
                     'contain' => []
                 ]);
                 if($id>10000)return; 
             }
            $music["easy_intercept"]=$row['2'];
            $music["easy_coefficient"]=$row['3'];
            $music["clear_intercept"]=$row['4'];
            $music["clear_coefficient"]=$row['5'];
            $music["hard_intercept"]=$row['6'];
            $music["hard_coefficient"]=$row['7'];
            $music["exhard_intercept"]=$row['8'];
            $music["exhard_coefficient"]=$row['9'];
            $music["fc_intercept"]=$row['10'];
            $music["fc_coefficient"]=$row['11'];

            $music["easy_intercept"]=$row['2'];

            #$music = $this->Musics->patchEntity($music, $add_data);
            #$tmp[]=$music;
            #if($id>318)break;
            $this->Musics->save($music);
        }
        $this->set(compact('tmp'));
    }
}
