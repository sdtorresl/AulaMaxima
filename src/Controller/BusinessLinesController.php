<?php
namespace App\Controller;

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

        // In a controller or table method.
        // $query = $articles->find('all')->contain(['Comments']);

        $this->set('businessLine', $businessLine);
        $this->set('_serialize', ['businessLine']);
    }
}
