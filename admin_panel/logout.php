<?php
session_start();
echo  $_COOKIE[session_name()];
unset($_SESSION['username']);
if(isset($_COOKIE[session_name()]))
{
    setcookie(session_name(),'',time() - 86400 ,'/');
}
session_destroy();
header("Location:index.php");