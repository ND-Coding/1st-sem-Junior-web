<?php
ini_set('display_errors', 1);
//date_default_timezone_set("American/NewYork");

function GetConnection()
{
	include __DIR__.'/_password.php';
	return new mysqli('localhost','dallingn1',$sql_password,'dallingn1');
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
	$result= $comm ->query($sql);
	
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