<?php
	require_once("config.inc.php");
	$secure = new secure();
	if(!$secure->checkLogin())
		header("Location: index.php");

	$x = "off";
	$y = "on";
