<?php

define("BASE_PATH",__DIR__);

$pages = $_GET['pages']?? 'Login-Pram';

if($path = file_exists(BASE_PATH.'/pages/'.$pages.'.php'))
{
    require BASE_PATH.'/pages/'.$pages.'.php';
}

