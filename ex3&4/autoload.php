<?php
function load($className) {
    include_once "ex3&4/classes/" . $className . ".php";
}

spl_autoload_register('load');

