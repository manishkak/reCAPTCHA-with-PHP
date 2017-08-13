<?php
if(isset($_POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response'])
{
	echo $_POST['g-recaptcha-response'].'<br><br>';
	var_dump($_POST);
	$secret = "your Secret key goes here";
	$ip = $_SERVER['REMOTE_ADDR']; 
	$captcha = $_POST['g-recaptcha-response'];
	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
	var_dump($rsp);
	$arr = json_decode($rsp,TRUE);
	if($arr['success']){
		echo 'Done';
	}
	else
	{
		echo 'SPAM!!';
	}
}﻿
?>