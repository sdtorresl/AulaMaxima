<?php
namespace App\Controller;

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
    }
    
}
