<?php
include("BasicOperation.php");
include("Database.php");
class User extends Database{
    protected string $table = "users";
    function __construct()
    {
        parent::__construct();
    }
    use BasicOperation;
}

$peter = new User();
$peter->add();
