<?php

class AddAnimeController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){
        $animeName = $_POST['anime'];
        $tier = $_POST['tier'];
        $anime = new AnimeModel;
        
        if($anime->addAnime($animeName, $tier)){
            $data['title'] = 'ANIME LIST';
            header("Location: animelist");
            exit;
        }
        else {
            echo '<h1>You failed!</h1>';
            header("Refresh: 3; url = home");
            exit;
        }    
    }
}