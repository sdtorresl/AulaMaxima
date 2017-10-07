<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BusinessLines Controller
 *
 * @property \App\Model\Table\BusinessLinesTable $BusinessLines
 *
 * @method \App\Model\Entity\BusinessLine[] paginate($object = null, array $settings = [])
 */
class BusinessLinesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $businessLines = $this->paginate($this->BusinessLines);

        $this->set(compact('businessLines'));
        $this->set('_serialize', ['businessLines']);
    }

    /**
     * View method
     *
     * @param string|null $id Business Line id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessLine = $this->BusinessLines->get($id, [
            'contain' => []
        ]);

        $this->set('businessLine', $businessLine);
        $this->set('_serialize', ['businessLine']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessLine = $this->BusinessLines->newEntity();
        if ($this->request->is('post')) {
            $businessLine = $this->BusinessLines->patchEntity($businessLine, $this->request->getData());
            if ($this->BusinessLines->save($businessLine)) {
                $this->Flash->success(__('The business line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business line could not be saved. Please, try again.'));
        }
        $this->set(compact('businessLine'));
        $this->set('_serialize', ['businessLine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Business Line id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $businessLine = $this->BusinessLines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessLine = $this->BusinessLines->patchEntity($businessLine, $this->request->getData());
            if ($this->BusinessLines->save($businessLine)) {
                $this->Flash->success(__('The business line has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business line could not be saved. Please, try again.'));
        }
        $this->set(compact('businessLine'));
        $this->set('_serialize', ['businessLine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Business Line id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessLine = $this->BusinessLines->get($id);
        if ($this->BusinessLines->delete($businessLine)) {
            $this->Flash->success(__('The business line has been deleted.'));
        } else {
            $this->Flash->error(__('The business line could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
