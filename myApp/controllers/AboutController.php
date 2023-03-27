<?php

class AboutController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        session_start();
        if(isset($_SESSION['user'])){
            $data['title'] = 'private ABOUT';
            $data['mainContent'] = '<img class="ms-5 w-75" src="myApp/img/rules.png" alt="image not found">';
            $data['button'] = $this->render(APP_PATH.VIEWS.'about.html', array());
            echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
        }
        else{
            $data['title'] = 'ABOUT page';
            $data['mainContent'] = '<img class="ms-5 w-75" src="myApp/img/rules.png" alt="image not found">';
            $data['button'] = $this->render(APP_PATH.VIEWS.'about.html', array());
            echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
        }

    }
}