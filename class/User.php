<?php 
class User{


    public static function logado(){
    
        if(!isset($_SESSION['logado'])){
                    include './views/login.php';
                    die;
                }  
    
    
    }
}