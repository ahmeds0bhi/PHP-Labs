<?php
$dbhost = 'localhost';
            $dbuser = 'root';
            $dbpassword = '123456';
            $dbname = 'users';
            
            $link = mysqli_connect($dbhost , $dbuser , $dbpassword , $dbname);
            
            if(!$link){
                echo "failed connection";
                exit;
            }
?>