<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Fields Controller
 *
 * @property \App\Model\Table\FieldsTable $Fields
 *
 * @method \App\Model\Entity\Field[] paginate($object = null, array $settings = [])
 */
class FieldsController extends AppController
{
    private $fieldsType;

    public function initialize()
    {
        parent::initialize();

        $this->fieldsType = array(
            'homeDescription' => __('Main description'),
            'homeMainTitle' => __('Main title'),
            'homeMainText' => __('Main text'),
            'homeSlogan' => __('Slogan'),
            'contactFormDescription' => __('Contact Form - Description'),
            'contactFormAddress' => __('Contact Form - Address'),
            'contactFormPhone' => __('Contact Form - Phone number')
        );

        asort($this->fieldsType);
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fields = $this->paginate($this->Fields);

        $this->set(compact('fields'));
        $this->set('_serialize', ['fields']);
        $this->set('page', 'home-page'); 
        $this->set('fieldsType', $this->fieldsType); 
        
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * View method
     *
     * @param string|null $id Field id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $field = $this->Fields->get($id, [
            'contain' => []
        ]);

        $this->set('field', $field);
        $this->set('_serialize', ['field']);
        $this->set('page', 'home-page'); 
        $this->set('fieldsType', $this->fieldsType); 
        
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $field = $this->Fields->newEntity();
        if ($this->request->is('post')) {
            $field = $this->Fields->patchEntity($field, $this->request->getData());
            if ($this->Fields->save($field)) {
                $this->Flash->success(__('The field has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The field could not be saved. Please, try again.'));
        }
        
        $this->set(compact('field'));
        $this->set('_serialize', ['field']);
        $this->set('fieldsType', $this->fieldsType); 
        
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Edit method
     *
     * @param string|null $id Field id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $field = $this->Fields->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $field = $this->Fields->patchEntity($field, $this->request->getData());
            if ($this->Fields->save($field)) {
                $this->Flash->success(__('The field has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The field could not be saved. Please, try again.'));
        }

        $this->set(compact('field'));
        $this->set('_serialize', ['field']);
        $this->set('fieldsType', $this->fieldsType); 
        
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Delete method
     *
     * @param string|null $id Field id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $field = $this->Fields->get($id);
        if ($this->Fields->delete($field)) {
            $this->Flash->success(__('The field has been deleted.'));
        } else {
            $this->Flash->error(__('The field could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
