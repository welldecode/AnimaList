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

        $controller_paste = strtolower(str_replace('Controller', '', get_class($this)));
        $paste = str_replace('app\controllers\site\\', '', $controller_paste);
        return   $paste . '/' . $action . '.php';
    }
}
