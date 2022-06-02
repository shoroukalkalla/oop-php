<?php

require_once "Dad.php";

class Son extends Dad
{
    function trySon()
    {
        echo $this->test;
    }
}
