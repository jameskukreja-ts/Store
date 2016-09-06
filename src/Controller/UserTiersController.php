<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserTiers Controller
 *
 * @property \App\Model\Table\UserTiersTable $UserTiers
 */
class UserTiersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userTiers = $this->paginate($this->UserTiers);

        $this->set(compact('userTiers'));
        $this->set('_serialize', ['userTiers']);
    }

    /**
     * View method
     *
     * @param string|null $id User Tier id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userTier = $this->UserTiers->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userTier', $userTier);
        $this->set('_serialize', ['userTier']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userTier = $this->UserTiers->newEntity();
        if ($this->request->is('post')) {
            $userTier = $this->UserTiers->patchEntity($userTier, $this->request->data);
            if ($this->UserTiers->save($userTier)) {
                $this->Flash->success(__('The user tier has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user tier could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserTiers->Users->find('list', ['limit' => 200]);
        $this->set(compact('userTier', 'users'));
        $this->set('_serialize', ['userTier']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Tier id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userTier = $this->UserTiers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userTier = $this->UserTiers->patchEntity($userTier, $this->request->data);
            if ($this->UserTiers->save($userTier)) {
                $this->Flash->success(__('The user tier has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user tier could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserTiers->Users->find('list', ['limit' => 200]);
        $this->set(compact('userTier', 'users'));
        $this->set('_serialize', ['userTier']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Tier id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userTier = $this->UserTiers->get($id);
        if ($this->UserTiers->delete($userTier)) {
            $this->Flash->success(__('The user tier has been deleted.'));
        } else {
            $this->Flash->error(__('The user tier could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
