<?php
session_start();
if(!isset($_SESSION["username"])){

    $logintrue = 0;
    
 }
else {
    $logintrue = 1;
}
?>