<?php
    require_once 'Users.php';
    require_once 'Roles.php';
    session_start();
    

    class SessionManager{        

        static function getUser(){
            if( isset( $_SESSION['ActualUser']) )
                return $_SESSION['ActualUser'];
            return NULL;
        }
        static function setUser($user){
            $_SESSION['ActualUser']=$user;
        }
    }
?>
