<?php 
class User{


    public static function logado(){
    
        if(!isset($_SESSION["logado"])){
            include './login.php';
            die();
        }
    }
}