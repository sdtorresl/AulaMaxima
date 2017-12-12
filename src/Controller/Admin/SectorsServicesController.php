<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SectorsServices Controller
 *
 * @property \App\Model\Table\SectorsServicesTable $SectorsServices
 *
 * @method \App\Model\Entity\SectorsService[] paginate($object = null, array $settings = [])
 */
class SectorsServicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sectors', 'Services']
        ];
        $sectorsServices = $this->paginate($this->SectorsServices);

        $this->set(compact('sectorsServices'));
        $this->set('_serialize', ['sectorsServices']);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id Sectors Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sectorsService = $this->SectorsServices->get($id, [
            'contain' => ['Sectors', 'Services']
        ]);

        $this->set('sectorsService', $sectorsService);
        $this->set('_serialize', ['sectorsService']);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sectorsService = $this->SectorsServices->newEntity();
        if ($this->request->is('post')) {
            $sectorsService = $this->SectorsServices->patchEntity($sectorsService, $this->request->getData());
            if ($this->SectorsServices->save($sectorsService)) {
                $this->Flash->success(__('The sectors service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sectors service could not be saved. Please, try again.'));
        }
        $sectors = $this->SectorsServices->Sectors->find('list', ['limit' => 200]);
        $services = $this->SectorsServices->Services->find('list', ['limit' => 200]);
        $this->set(compact('sectorsService', 'sectors', 'services'));
        $this->set('_serialize', ['sectorsService']);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Edit method
     *
     * @param string|null $id Sectors Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sectorsService = $this->SectorsServices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sectorsService = $this->SectorsServices->patchEntity($sectorsService, $this->request->getData());
            if ($this->SectorsServices->save($sectorsService)) {
                $this->Flash->success(__('The sectors service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sectors service could not be saved. Please, try again.'));
        }
        $sectors = $this->SectorsServices->Sectors->find('list', ['limit' => 200]);
        $services = $this->SectorsServices->Services->find('list', ['limit' => 200]);
        $this->set(compact('sectorsService', 'sectors', 'services'));
        $this->set('_serialize', ['sectorsService']);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Delete method
     *
     * @param string|null $id Sectors Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sectorsService = $this->SectorsServices->get($id);
        if ($this->SectorsServices->delete($sectorsService)) {
            $this->Flash->success(__('The sectors service has been deleted.'));
        } else {
            $this->Flash->error(__('The sectors service could not be deleted. Please, try again.'));
        }

        $this->viewBuilder()->setLayout('admin');

        return $this->redirect(['action' => 'index']);
    }
}
