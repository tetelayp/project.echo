<?php

//$url = $_SERVER['REQUEST_URI'];
//echo $url;

require __DIR__ . '/autoload.php';

$news=new \App\Controllers\News();

$news->action('Index');
