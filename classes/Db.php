<?php

abstract class Db
{
    public $servername;
    public $username;
    public $password;
    public $dbname;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function test()
    {
        echo "Testing";
    }

    abstract function read(string $table);
}
