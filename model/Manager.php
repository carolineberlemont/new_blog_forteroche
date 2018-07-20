<?php

namespace Caro\New_blog_forteroche\Model;

class Manager
{
    private $db;   
    protected function dbConnect()
    {
        if ($this->db==null) {
            $data=parse_ini_file("config.ini");
            $this->db = new \PDO('mysql:host='.$data['host'].';dbname='.$data['dbname'].';charset=utf8', $data['username'], $data['password']); 
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        }
        return $this->db;
    }
}