<?php

session_start();
session_unset();
//var_dump(session_status() == PHP_SESSION_ACTIVE);
echo "<script>location.href ='./index.php';</script>";