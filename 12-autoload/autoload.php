<?php

function autoLoad($class)
{
    require_once 'clases/' . $class . '.php';
}

spl_autoload_register('autoLoad');