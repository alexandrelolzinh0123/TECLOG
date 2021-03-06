<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lots Controller
 *
 * @property \App\Model\Table\LotsTable $Lots
 *
 * @method \App\Model\Entity\Lot[] paginate($object = null, array $settings = [])
 */
class LotsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $lots = $this->paginate($this->Lots);

        $this->set(compact('lots'));
        $this->set('_serialize', ['lots']);
    }

    /**
     * View method
     *
     * @param string|null $id Lot id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lot = $this->Lots->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('lot', $lot);
        $this->set('_serialize', ['lot']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lot = $this->Lots->newEntity();
        if ($this->request->is('post')) {
            $lot = $this->Lots->patchEntity($lot, $this->request->getData());
            if ($this->Lots->save($lot)) {
                $this->Flash->success(__('The lot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lot could not be saved. Please, try again.'));
        }
        $products = $this->Lots->Products->find('list', ['limit' => 200]);
        $this->set(compact('lot', 'products'));
        $this->set('_serialize', ['lot']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lot id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lot = $this->Lots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lot = $this->Lots->patchEntity($lot, $this->request->getData());
            if ($this->Lots->save($lot)) {
                $this->Flash->success(__('The lot has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lot could not be saved. Please, try again.'));
        }
        $products = $this->Lots->Products->find('list', ['limit' => 200]);
        $this->set(compact('lot', 'products'));
        $this->set('_serialize', ['lot']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lot id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lot = $this->Lots->get($id);
        if ($this->Lots->delete($lot)) {
            $this->Flash->success(__('The lot has been deleted.'));
        } else {
            $this->Flash->error(__('The lot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
