<?php

class Home extends Controller {
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }
    
    public function indexAction() {
        $db = DB::getInstance();
        $data = new stdClass();

        $this->view->model('home');
        $this->view->render('home/index');
    }

    public function aboutusAction() {
        $db = DB::getInstance();
        $data = new stdClass();

        $this->view->model('home');
        $this->view->render('home/aboutUs');
    }

    public function blogAction() {
        $db = DB::getInstance();
        $data = new stdClass();

        $this->view->model('home');
        $this->view->render('home/blog');
    }

    public function kontaktAction() {
        $db = DB::getInstance();
        $data = new stdClass();

        $this->view->model('home');
        $this->view->render('home/kontakt');
    }
    
}