<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\Core\Configure;

class FrontEndController extends AppController{
	public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
        $this->loadModel('Topics');
        $this->viewBuilder()->layout('frontend');
        $this->set('FrontEndImage',Router::url('/', true).'img/frontend/home-bg.jpg');
    }

	public function index(){
        //echo $this->stringToSlug("Germans are doing deep & scans '88**9' of ancient instruments to uncover their secrets");
        $this->set('title', 'Home');
        $this->set('link',Router::url('/', true));
        $this->set('topics', $this->Topics->find('all'));
    }

    public function view($id){
        $this->set('title','Home');
        $this->set('link',Router::url('/', true));
        //$topic = $this->Topics->get($id);
        $topics = $this->Topics->find('all',['conditions'=>['titleSlug'=>$id]]);
        $this->set(compact('topics'));
    }

    public function contact(){

    }
}