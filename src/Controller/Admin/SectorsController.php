<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Sectors Controller
 *
 * @property \App\Model\Table\SectorsTable $Sectors
 *
 * @method \App\Model\Entity\Sector[] paginate($object = null, array $settings = [])
 */
class SectorsController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->set('page', 'sectors'); 
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BusinessLines']
        ];
        $sectors = $this->paginate($this->Sectors);

        $this->set(compact('sectors'));
        $this->set('_serialize', ['sectors']);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id Sector id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sector = $this->Sectors->get($id, [
            'contain' => ['BusinessLines', 'Services']
        ]);

        $this->set('sector', $sector);
        $this->set('_serialize', ['sector']);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sector = $this->Sectors->newEntity();
        if ($this->request->is('post')) {
            $sector = $this->Sectors->patchEntity($sector, $this->request->getData());
            if ($this->Sectors->save($sector)) {
                $this->Flash->success(__('The sector has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sector could not be saved. Please, try again.'));
        }
        $businessLines = $this->Sectors->BusinessLines->find('list', ['limit' => 200]);
        $services = $this->Sectors->Services->find('list', ['limit' => 200]);
        $this->set(compact('sector', 'businessLines', 'services'));
        $this->set('_serialize', ['sector']);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Edit method
     *
     * @param string|null $id Sector id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sector = $this->Sectors->get($id, [
            'contain' => ['Services']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sector = $this->Sectors->patchEntity($sector, $this->request->getData());
            if ($this->Sectors->save($sector)) {
                $this->Flash->success(__('The sector has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sector could not be saved. Please, try again.'));
        }
        $businessLines = $this->Sectors->BusinessLines->find('list', ['limit' => 200]);
        $services = $this->Sectors->Services->find('list', ['limit' => 200]);
        $this->set(compact('sector', 'businessLines', 'services'));
        $this->set('_serialize', ['sector']);

        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Delete method
     *
     * @param string|null $id Sector id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sector = $this->Sectors->get($id);
        if ($this->Sectors->delete($sector)) {
            $this->Flash->success(__('The sector has been deleted.'));
        } else {
            $this->Flash->error(__('The sector could not be deleted. Please, try again.'));
        }

        $this->viewBuilder()->setLayout('admin');

        return $this->redirect(['action' => 'index']);
    }
}
