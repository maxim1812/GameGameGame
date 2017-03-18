<?php

function createFile($s)
{
	$b = file_exists($s);
	if($b == false)
	{
		$f = fopen($s,"w+");
		fclose($f);
	}
}

function getFileValue($s)
{
	createFile($s);
	$f = fopen($s,"r");
	$answer = fgets($f) . "";
	fclose($f);
	return $answer;
}

function setFileValue($s,$value)
{
	$f = fopen($s,"w+");
	fwrite($f,$value);
	fwrite($f,"\n\n");
	fclose($f);
}

?>