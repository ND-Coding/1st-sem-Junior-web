<?php
include_once __DIR__ . '/.../inc/all.php';
ini_set(dispalay,1);

$action = isset($_REQUEST['action'])?$_REQUEST['action'] :null;
$method = isset($_REQUEST['HTTP_METHOD'])?$_REQUEST['HTTP_METHOD'] :'GET';
$view = null;
$format = isset($_REQUEST['action'])?$_REQUEST['action'] :'web';

switch($action . '_'.$method){
	case'create_GET';
		$_view ='today/edit.php';
		include __DIR__.'/.../Views/today/edit.php';
		$model=Today::Blank();
		break;
	case'create_POST';
		
		
		break;
		
	case'update_GET';
		include __DIR__.'/.../Views/today/edit.php';
		$model = Today::Get();
		break;
	case'update_POST';
		
		
		break;
	case'delete_GET';
		$_view ='/../Views/today/delete.php';
		
		break;
	case'delete_POST';
		
		
		break;
	case'index_GET';
		include __DIR__.'/...Views/today/index.php';
		
		break;
	default;
	$model =Today::Get();
	$view ='/...Views/today/index.php';
	
	
	
	
}
switch($format){
	case'plain';
		include __DIR__ . '/...Views/today/';
		
		break;
	case'json';
		echo json_encode($model);
		break;
		
	case'web';
		default;
		break;
	default:
		include __DIR__.'/..Views/template.php';
		break;
	
	
	
	
	
}