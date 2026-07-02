<?php

trait BasicOperation{
    function add($data = null){
        echo "Using $this->con";
        echo "Adding data in $this->table...<br>";
    }
    function delete(){
        echo "Deleting data...<br>";
    }
}