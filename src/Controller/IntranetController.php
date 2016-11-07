<?php


namespace App\Controller;


class IntranetController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['login', 'logout', 'error']);
    }

    public function login()
    {
        $this->Auth->authenticate = array(
            'Form' => array(
                'fields' => array('username' => 'username', 'password' => 'password')
            ));
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                if ($this->Auth->User('is_admin')){
                    return $this->redirect(['controller' => 'Users','action' => 'index', 'prefix' => 'admin']);
                }
                else{
                return $this->redirect($this->Auth->redirectUrl());
                }
            } else {
                $this->Flash->error(__('Nom Utilisateur ou Mot de passe incorrect'), [
                    'key' => 'auth'
                ]);
            }
        }
    }

    public function logout() {

        $this->redirect($this->Auth->logout());
    }

    public function error() {

    }

}