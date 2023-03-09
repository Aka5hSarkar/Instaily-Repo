<?php
    function connect(){
        $connection=mysqli_connect('localhost','root','root','mydb');
        if(!$connection){
            die('error');
        }
        return $connection;
    }
?>