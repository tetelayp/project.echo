<?php

namespace App;


abstract class Model
{
    public $id;
    const TABLE='';

    public static function fetchAll()
    {
        $db=Db::instance();
        return $db->query('SELECT * FROM ' . static::TABLE, [],static::class);
    }
    public static function findById($id)
    {
        $db=Db::instance();

        return $db->query('SELECT * FROM ' . static::TABLE . 'WHERE id=:id',[':id'=>$id] ,static::class);
    }
    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()){
            return;
        }
        $columns=[];
        $values=[];
        foreach ($this as $k => $v)
        {
            if ('id' == $k){
                continue;
            }
            $columns[]=$k;
            $values[':' . $k]=$v;
        }
        $db=Db::instance();
        $db->execute ('INSERT INTO ' . static::TABLE .
            ' (' . implode(',', $columns) . ') 
            VALUES 
            (' . implode (',',array_keys($values)) . ')',
            $values);
    }

}