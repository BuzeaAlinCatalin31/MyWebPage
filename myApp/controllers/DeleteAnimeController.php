<?php 

class DeleteAnimeController extends AppController
{
    public function __construct(){
        $this->init();
    }

    public function init(){

        $anime = new AnimeModel;
        $id = $_POST['del_id'];

        if($anime->delAnime($id)){
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