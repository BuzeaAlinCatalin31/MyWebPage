<?php

class LoginController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $uName = $_POST['userName'];
        $uPass = $_POST['userPass'];
        $user = new UsersModel;

        if($user->isAuth($uName, $uPass)){
            session_start();
            $_SESSION['user'] = $uName;
            $data['title'] = 'PRIVATE PAGE';
            header("Location: home");
            exit;
        }
        else {
            echo '<h1>The login informations are incorrect! You will be redirected to homepage!</h1>';
            header("Refresh: 3; url = home");
            exit;
        }    
    }
}