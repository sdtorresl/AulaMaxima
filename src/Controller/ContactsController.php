<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 *
 * @method \App\Model\Entity\Contact[] paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function contact()
    {
        $contact = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            $contact = $this->Contacts->patchEntity($contact, $this->request->getData());
            if ($this->Contacts->save($contact)) {
                $this->Flash->success(__('Your information has been sent successfully.'));

                $message = '<p> Se ha registrado un nuevo contacto en la página web de Aula Máxima.
                    Los datos de contacto son:</p>
                    <ul>
                        <li>Nombre: ' . $contact->name . '</li>
                        <li>Correo electrónico: ' . $contact->email . '</li>
                        <li>Mensaje: ' . $contact->message . '</li>
                    </ul>';

                $messageToCustomer = '<p> Hemos recibido su mensaje en la página web de Aula Máxima. Muy pronto nos pondremos en contacto con usted.
                    Los datos enviados son:</p>
                    <ul>
                        <li>Nombre: ' . $contact->name . '</li>
                        <li>Correo electrónico: ' . $contact->email . '</li>
                        <li>Mensaje: ' . $contact->message . '</li>
                    </ul>';

                // Send email to customer
                $email = new Email('default');
                $email->from(['soporte@innovaciones.co' => 'Aula Maxima'])
                    ->to($contact->email)
                    ->subject(__('Your information has been sent'))
                    ->send($messageToCustomer);

                // Send email to admin
                $email = new Email('default');
                $email->from(['soporte@innovaciones.co' => 'Aula Maxima'])
                    ->to(['soporte@innovaciones.co'])
                    ->subject(__('New contact on web page'))
                    ->send($message);

                return $this->redirect(['action' => 'contact']);
            }
            $this->Flash->error(__('Your information couldn\'t be sent.'));
        }
        $this->set(compact('contact'));
        $this->set('_serialize', ['contact']);
    }
}
