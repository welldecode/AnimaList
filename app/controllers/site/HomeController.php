<?php

namespace app\controllers\site;

use  core\Controller;

class HomeController extends Controller
{
  
    public function index(array $params)
    { 
        $this->view->setPageTitle('Página Inicial');
    }

}
