<?php

namespace App;


class View
    implements \Countable
{

    protected $data=[];
    public function __set($k, $v)
    {
        $this->data[$k]=$v;
    }
    public function __get($k)
    {
        return $this->data[$k];
    }
    public function __isset($k)
    {
        return !empty($this->data[$k]);
    }
    public function render($template)
    {
        foreach ($this->data as $k => $v){
            $$k=$v;
        }
        ob_start();
        include $template;
        $content=ob_get_contents();
        ob_end_clean();
        return $content;
    }
    public function display($template)
    {
        echo $this->render($template);
    }

    public function count()
    {
        return count($this->data);
    }
}