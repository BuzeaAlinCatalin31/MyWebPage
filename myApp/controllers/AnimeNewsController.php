<?php

class AnimeNewsController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        session_start();
        if(isset($_SESSION['user'])){
            $data['title'] = 'ANIME NEWS';
            $anime = new AnimeModel;
            $data['button'] = $this->render(APP_PATH.VIEWS.'animeAPI.html', array());
            $data['mainContent'] = '<h3>Here are the latest news about anime:</h3>';
            echo $this->render(APP_PATH.VIEWS.'layoutAuth.html', $data);
        }
        else{
            $data['title'] = 'ANIME NEWS';
            $anime = new AnimeModel;
            $data['button'] = $this->render(APP_PATH.VIEWS.'animeAPI.html', array());
            $data['mainContent'] = '<h3>Here are the latest news about anime:</h3>';
            echo $this->render(APP_PATH.VIEWS.'layout.html', $data);
        }
    }
}