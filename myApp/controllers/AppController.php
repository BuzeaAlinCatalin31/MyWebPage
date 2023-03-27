<?php

class AppController extends Controller
{

    protected $routes = ['home' => 'HomeController',
                        'about' => 'AboutController',
                        'login' => 'LoginController',
                        'logout' => 'LogoutController',
                        'signup' => 'SignupController',
                        'animelist' => 'AnimelistController',
                        'addanime' => 'AddAnimeController',
                        'delanime' => 'DeleteAnimeController',
                        'animenews' => 'AnimeNewsController'
                        ];

    public function __construct(){
        // echo __FILE__;
        $this->init();
    }

    public function init(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        else {
            $page = 'home';
        }

        if(array_key_exists($page, $this->routes)){
            $className = $this->routes[$page];
        }
        else {
            $className = $this->routes['home'];
        }
        new $className;
    }
}