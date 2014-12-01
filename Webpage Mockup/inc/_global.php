<?php
ini_set('display_errors', 1);
date_default_timezone_set("America/New_York");

function GetConnection()
{
	include __DIR__.'/_password.php';
	return new mysqli('localhost','N02723913',$sql_password,'N02723913.db');
}
function print_n($x){
	?><pre><?
		print_r($x);
	?></pre><?
}


function FetchALL($sql)
{
	$ret =array();
	$conn = GetConnection();
	$result= $conn->query($sql);
	
	$error=$conn->error;
	if($error){
		echo $error;
	}
		else{
			while ($rs =$results->fetch_as) {
				$ret[] =$ret;
 			}
		
	}
return $ret;
}