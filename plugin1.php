<?php

/*
Plugin Name: Mi primer Plugin
Plugin URI: www.mifactoriadewebs.com
Description: Hello World Plugin
Version: 1
Author: Antonio
license: GPL1
*/

if (is_admin()){
    echo "Soy Administrador";
}

echo "Hello World";