<?php

require "module.php";

$player = $_REQUEST['tip'] + 0;
$x = $_REQUEST['x'] + 0;
$y = $_REQUEST['y'] + 0;

$fileName = "files/game_1_2.txt";

$c = getFileValue($fileName);
$mass = array();
$mass = explode("_",$c);
for($i = 0; $i < 4; $i++) $mass[$i] = $mass[$i] + 0;

if($player == 1)
{
	$mass[0] = $x;
	$mass[1] = $y;
	$s = "" . ($mass[0] . "_" . $mass[1] . "_" . $mass[2]. "_" . $mass[3]);
	setFileValue($fileName,$s);
}

if($player == 2)
{
	$mass[2] = $x;
	$mass[3] = $y;
	$s = "" . ($mass[0] . "_" . $mass[1] . "_" . $mass[2]. "_" . $mass[3]);
	setFileValue($fileName,$s);
}

$c = getFileValue($fileName);
echo $c;

?>