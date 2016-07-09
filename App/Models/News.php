<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.07.2016
 * Time: 10:25
 */

namespace App\Models;


use App\Exception\MultiException;
use App\Model;

class News extends Model
{
    const TABLE='news';
    public $id;
    public $title;
    public $text;
    public $category;

    public function fill($data=[])
    {
        $e = new MultiException();
        if (true){
            $e[]=new \Exception('Что-то пошло не так!');
        }
        if (true){
            $e[]=new \Exception('Данные не введены');
        }
        if (true){
            $e[]=new \Exception('Ошибка доступа');
        }

        if ($e->offsetExists(0)){
            throw $e;
        }
    }

}