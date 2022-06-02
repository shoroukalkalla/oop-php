<?php

require_once "Db.php";

class MySQL extends Db
{
    function read(string $table)
    {
        echo 'I am reading from Database';
    }

    function test()
    {
        echo "$this->servername";
    }
}
