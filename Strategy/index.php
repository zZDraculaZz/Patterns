<?php
include("Ducks/FlyInterface.php");
include("Ducks/QuackInterface.php");
include ("Ducks/FlyWithoutWings.php");
include ("Ducks/FlyWithWings.php");
include ("Ducks/HighQuack.php");
include ("Ducks/Duck.php");
include ("Ducks/RedHeadDuck.php");

$red_head_duck = new RedHeadDuck();
$red_head_duck->fly();
echo "<br/>";
$red_head_duck->quack();
echo "<br/>";