<?php

class User
{
    //properties
    var $name;
    var $email;
    var $age; 
    var $is_admin = false;

    //methods
    function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        // echo "new object created <br/>";
    }

    function birthdayGreet()
    {
        $this->age += 1;
        echo "happy birthday, your age is $this->age <br/>";
    }

    function updateEmail($new_email)
    {
        $this->email = $new_email;
        echo "your updated email is $new_email <br/>";
    }

    function __destruct()
    {
        echo "Goodbye $this->name";
    }

}
