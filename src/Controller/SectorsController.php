<?php
namespace App\Controller;

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

        $relatedSectors = $this->Sectors->find()
            ->where(['id !=' => $id]);

        $this->set('sector', $sector);
        $this->set('relatedSectors', $relatedSectors);
        $this->set('_serialize', ['sector']);
    }

}
