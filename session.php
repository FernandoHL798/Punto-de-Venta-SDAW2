<?php
session_start();
if(isset($_SESSION['email']))
{
    header('Location: ./inicio.php');
}
else{
    //header('Location: ./index.php');
}