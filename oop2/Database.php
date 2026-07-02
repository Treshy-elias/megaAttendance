<?php

class Database
{
    protected string $con = "Our connection string";
    function __construct()
    {
        $this->connect();
    }
    function connect(){
        echo "Connecting to database...<br>";
        // $connection = new mysqli('localhost', 'root', 'protected', 'world');

        // if ($connection->connect_error) {
        //     die("Connection failed ". $connection->connect_error);
        // }else{
        //     $this->con = $connection;
        // }
        // return $connection;
    }
}
