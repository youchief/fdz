<?php

App::uses('AppController', 'Controller');

/**
 * xx Controller
 *
 * @property Ad $Ad
 */
class ContactsController extends AppController {
        
        public $uses = array('Contact');
        public $components = array('Email');
        
        public function index() {
                if ($this->request->is('post')) {
                        $this->Contact->set($this->request->data);
                        if ($this->Contact->validates()) {
                                $email = new CakeEmail();
                                //debug($this->request->data);
                                $email->from(array($this->request->data['Contact']['email'] => $this->request->data['Contact']['firstname'] . " " . $this->request->data['Contact']['lastname']));
                                $email->to('info@fdzsa.ch');
                                $email->template('contact');
                                $email->emailFormat('html');
                                $email->viewVars(array('contact' => $this->request->data['Contact']['firstname'] . " " . $this->request->data['Contact']['lastname'],
                                    'subject' => $this->request->data['Contact']['subject'],
                                    'message' => $this->request->data['Contact']['message'],
                                    'email' => $this->request->data['Contact']['email']));
                                $email->subject('Contact depuis le site FDZ');
                                if ($email->send()) {
                                        echo $this->Session->setFlash(__('Merci pour votre message, nous vous contacterons très prochainement.'), 'default', array('class' => 'alert alert-info'));
                                        $this->redirect("/");
                                }
                        } else {
                                $this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
                        }
                }
        }

}
