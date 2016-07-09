<?php

namespace App\Models;


use App\Model;

class Menu extends Model
{
    const TABLE='menu';
    public $id;
    public $title;
    public $pos;
    public $parent;
    public $href;
}