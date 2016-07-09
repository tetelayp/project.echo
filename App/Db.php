<?php

namespace App;


class Db
{
    use Singleton;
    protected $dbh;
    protected function __construct()
    {
        try {
            $this->dbh = new \PDO('mysql:host=127.0.0.1; dbname=echobase', 'root', '');
        } catch (\PDOException $e){
            throw new \App\Exception\Db($e->getMessage());
        }
    }

    public function execute($sql, $params=[])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }
    /**
     * @param $sql string
     * @param $class string  class name
     * @return array of class model
     */
    public function query($sql,$params=[] ,$class)
    {
        $sth=$this->dbh->prepare($sql);
        $res=$sth->execute($params);
        if (false!==$res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];

    }
}