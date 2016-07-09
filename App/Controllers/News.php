<?php

namespace App\Controllers;


use App\View;

class News
{
    protected $view;
    public function __construct()
    {
        $this->view=new View();
    }

    public function action($action)
    {
        $methodName='action'.$action;
        $this->beforeAction();
        return $this->$methodName();
    }

    public function beforeAction()
    {

    }

    public function actionIndex()
    {

    }

    
}