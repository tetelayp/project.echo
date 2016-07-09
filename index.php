<?php

$url = $_SERVER['REQUEST_URI'];
echo $url;

require __DIR__ . '/autoload.php';

$view=new \App\View();
$view->menu=\App\Models\Menu::fetchAll();
$view->news=\App\Models\News::fetchAll();
$view->title='ECHOCITY';
//echo count($view);
$view->display(__DIR__ . '/templates/index.php');