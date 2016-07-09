<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 04.07.2016
 * Time: 10:25
 */

namespace App\Models;


use App\Model;

class News extends Model
{
    const TABLE='news';
    public $id;
    public $title;
    public $text;
    public $category;

}