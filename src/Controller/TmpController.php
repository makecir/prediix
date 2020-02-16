<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tmp Controller
 *
 * @property \App\Model\Table\TmpTable $Tmp
 *
 * @method \App\Model\Entity\Tmp[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TmpController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tmp = $this->paginate($this->Tmp);

        $this->set(compact('tmp'));
    }

    /**
     * View method
     *
     * @param string|null $id Tmp id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tmp = $this->Tmp->get($id, [
            'contain' => [],
        ]);

        $this->set('tmp', $tmp);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tmp = $this->Tmp->newEmptyEntity();
        if ($this->request->is('post')) {
            $tmp = $this->Tmp->patchEntity($tmp, $this->request->getData());
            if ($this->Tmp->save($tmp)) {
                $this->Flash->success(__('The tmp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp could not be saved. Please, try again.'));
        }
        $this->set(compact('tmp'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tmp id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tmp = $this->Tmp->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tmp = $this->Tmp->patchEntity($tmp, $this->request->getData());
            if ($this->Tmp->save($tmp)) {
                $this->Flash->success(__('The tmp has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tmp could not be saved. Please, try again.'));
        }
        $this->set(compact('tmp'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tmp id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tmp = $this->Tmp->get($id);
        if ($this->Tmp->delete($tmp)) {
            $this->Flash->success(__('The tmp has been deleted.'));
        } else {
            $this->Flash->error(__('The tmp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
