<?php

namespace App\Controllers;


use App\Exception\MultiException;
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
        $this->view->menu=\App\Models\Menu::fetchAll();
        $this->view->news=\App\Models\News::fetchAll();
        $this->view->title='ECHOCITY';
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    public function actionCreate()
    {
        try{
            $article=new \App\Models\News();
            $article->fill([]);
            $article->save;
        } catch (MultiException $e){
            $this->view->errors=$e;
        }
        $this->view->display(__DIR__ . '/../../templates/create.php');
    }

    
}