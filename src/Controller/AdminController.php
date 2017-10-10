<?php

namespace App\Controller;
use App\Controller\AppController;

class AdminController extends AdminAppController{
	public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

	public function index(){
        if ($this->Auth->user()){
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                /*
                $session = $this->request->session();
                print_r($session->read());
                print_r($session->read('Auth.User.role'));
                */
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
}