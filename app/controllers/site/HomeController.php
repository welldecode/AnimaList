<?php

namespace app\controllers\site;

use core\View;
use core\Controller; 
use app\models\Anime;

class HomeController extends Controller
{

    public function index( )
    { 
        $this->view->setPageTitle('Página Inicial');
        $this->view->topics = Anime::all('value',3);
        $this->view->trending_now = Anime::all('value');
    }
}
