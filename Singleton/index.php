<?php

include ("Singleton.php");

$singleton = new Singleton();

echo"<pre>";
var_dump($singleton);
echo"<pre>";

$obj = $singleton->getInstance();

echo"<pre>";
var_dump($obj->sayHello());
echo"<pre>";