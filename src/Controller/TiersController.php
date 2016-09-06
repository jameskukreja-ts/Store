<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiers Controller
 *
 * @property \App\Model\Table\TiersTable $Tiers
 */
class TiersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tiers = $this->paginate($this->Tiers);

        $this->set(compact('tiers'));
        $this->set('_serialize', ['tiers']);
    }

    /**
     * View method
     *
     * @param string|null $id Tier id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tier = $this->Tiers->get($id, [
            'contain' => []
        ]);

        $this->set('tier', $tier);
        $this->set('_serialize', ['tier']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tier = $this->Tiers->newEntity();
        if ($this->request->is('post')) {
            $tier = $this->Tiers->patchEntity($tier, $this->request->data);
            if ($this->Tiers->save($tier)) {
                $this->Flash->success(__('The tier has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tier could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tier'));
        $this->set('_serialize', ['tier']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tier id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tier = $this->Tiers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tier = $this->Tiers->patchEntity($tier, $this->request->data);
            if ($this->Tiers->save($tier)) {
                $this->Flash->success(__('The tier has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tier could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tier'));
        $this->set('_serialize', ['tier']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tier id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tier = $this->Tiers->get($id);
        if ($this->Tiers->delete($tier)) {
            $this->Flash->success(__('The tier has been deleted.'));
        } else {
            $this->Flash->error(__('The tier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
