<?php
namespace App\Controller;

use App\Controller\AppController;

class AdminController extends AppController
{
	/**
     * Home method
     *
     * @return \Cake\Http\Response|void
     */
	public function home()
	{
		$this->set('page', 'admin-page'); 
        $this->viewBuilder()->setLayout('admin');
	}
}