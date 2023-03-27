<?php

class AnimelistController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){

        session_start();
        if(isset($_SESSION['user'])){
            $data['title'] = 'ANIME LIST';
            $anime = new AnimeModel;
            $data['button'] = $this->render(APP_PATH.VIEWS.'button.html', array());
            $data['mainContent'] = $anime->animeList();
            echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
        }
        else {

            // echo $this->render(APP_PATH.VIEWS.'layout.html', array());
            header("Location:home");
        }
            
    }
}