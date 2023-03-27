<?php

class HomeController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){

        session_start();
        if(isset($_SESSION['user'])){
            $data['title'] = 'private HOMEPAGE';
            $data['mainContent'] = '<h2>Hello, <i>' . $_SESSION['user'] . '</i></h2>';
            $data['button'] = $this->render(APP_PATH.VIEWS.'homepage.html', array());
            echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
        }
        else{
            $data['title'] = 'HOMEPAGE';
            $user = new UsersModel;
            $data['mainContent'] = '<img src="myApp/img/welcome.jpg" alt="Image not found">';
            $data['button'] = '';
            echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
        }

    }
}