<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * ContactsCounter cell
 */
class ContactsCounterCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Contacts');
        $contactsCount = $this->Contacts->find()->count();
        $this->set('contactsCount', $contactsCount);
    }
}
