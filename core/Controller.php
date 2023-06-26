<?php

namespace core;
 
class Controller
{
    public $view = null;
    protected $action = null;
    protected $controller = null;
    protected $params = null;
 
    public function init(string $action, array $params)
    { 
        $this->view = new View(); 

        $this->action = $action;
        $this->$action($params);  
            
        $this->view->render($this->renderView($action));
    }

    protected function renderView(string $action)
    {
        $controller = get_class($this);
        $script = strtolower(substr($controller, 16, -10) . '/' . $action . '.php');
        return $script;
    }
}
