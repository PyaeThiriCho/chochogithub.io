<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'])
{
    echo "Welcome back!You are still logged in";
}
else
{
    echo "You are not loggined";
}

?>