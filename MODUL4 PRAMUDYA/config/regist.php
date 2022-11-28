<?php

require 'function.php';

if(isset($_SESSION['login']))
{
    header("location:Home-Pram.php");
}

if(isset($_POST['submit'])){

    return registrasi($_POST);

}