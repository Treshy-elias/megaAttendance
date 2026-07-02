<?php
include("BasicOperation.php");
include("Database.php");
class Product extends Database{
    protected string $table = "products";
     function __construct()
    {
        parent::__construct();
    }
   use BasicOperation;
}

$coke = new Product();
$coke->add("products");