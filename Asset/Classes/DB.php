<?php

class DB
{
    private $conn,$server,$DB,$login,$pwd,$ris,$rec;

    public function __construct($server,$DB,$login,$pwd)
    {
        $this->server = $server;
        $this->DB = $DB;
        $this->login = $login;
        $this->pwd = $pwd;
        $this->conn = new PDO('mysql:host='.$this->server.';dbname='.$this->DB,$this->login,$this->pwd);
    }

    public function query($query)
    {
        $return = [];
        foreach ($this->conn->query($query) as $key => $value)
            $return[$key] = $value;

        return $return;
    }

    public function closeConn()
    {
        $this->conn = null;
    }
}