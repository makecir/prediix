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
    // public function addcsv()
    // {
    //     $this->loadComponent('CSV');
    //     $playdatas = $this->paginate($this->Playdatas);

    //     $this->set(compact('playdatas'));

    //     // CSV入力時
    //     $csvform = new CSVForm();
    //     $csv_data = $this->request->getData('upload-csv');
    //     if (!is_null($csv_data)) {
    //         $this->set(compact('csv_data'));
    //         //$result = $this->CSV->read($csv_data,["a"=>"b"]); 
            
    //         //$this->addresult($result);
    //     }
    //     $this->set(compact('csvform'));
    //     //return $this->redirect(['action' => 'addcsv']);
    // }

    // public function addresult(&$result)
    // {
    //     foreach($result['records'] as $row){
    //         //$insert_row
    //         foreach($row as $i => $element){
    //             if($result['columns'][$i]=="dummy")continue;
    //             else $insert_row[$result['columns'][$i]]=$element;
    //         }
    //         $pd_puery = $this->Playdatas->query();
    //         $pd_puery->insert(array_keys($insert_row));
    //         $pd_puery->values($insert_row)->execute();
    //     }
    //     return $this->redirect(['action' => 'addcsv']);
    // }

    //adcsvdata
    // public function addcsvms()
    // {
    //     $this->loadComponent('CSV');
    //     $playdatas = $this->paginate($this->Playdatas);

    //     $this->set(compact('playdatas'));

    //     // CSV入力時
    //     $csvform = new CSVForm();
    //     $csv_data = $this->request->getData('upload-csv');
    //     if (!is_null($csv_data)) {
    //         $this->set(compact('csv_data'));
    //         $result = $this->CSV->read($csv_data,["譜面ID"=>"mid",
    //             "楽曲名"=>"title",
    //             "バージョン"=>"version",
    //             "難易度"=>"difficult",
    //             "ノート数"=>"notes"
    //         ]); 
            
    //         //$this->addresult($result);
    //         $this->addmusic($result);
    //     }
    //     $this->set(compact('csvform'));
    //     //return $this->redirect(['action' => 'addcsv']);
    // }

    // public function addmusic(&$result)
    // {
    //     $this->loadModel('Musics');
    //     foreach($result['records'] as $row){
    //         //$insert_row
    //         foreach($row as $i => $element){
    //             $insert_row[$result['columns'][$i]]=$element;
    //         }
    //         $pd_puery = $this->Musics->query();
    //         $pd_puery->insert(array_keys($insert_row));
    //         $pd_puery->values($insert_row)->execute();
    //     }
    //     return $this->redirect(['action' => 'addcsvms']);
    // }
}
