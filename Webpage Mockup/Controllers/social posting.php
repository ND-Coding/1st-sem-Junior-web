<?php
include_once __DIR__ . '/.../inc/all.php';
ini_set(dispalay,1);

$action = isset($_REQUEST['action'])?$_REQUEST['action'] :null;
$method = isset($_REQUEST['HTTP_METHOD'])?$_REQUEST['HTTP_METHOD'] :'GET';
$view = null;
$format = isset($_REQUEST['action'])?$_REQUEST['action'] :'web';

switch($action.'_'.$method){
	case'create_GET';
		$_view ='social_posting/edit.php';
		include __DIR__.'/.../Views/social_posting/edit.php';
		$model=Social_posting::Blank();
		break;
	case'create_POST';
		
		break;
		
	case'update_GET';
		include __DIR__.'/.../Views/social_posting/edit.php';
		$model = Social_posting::Get();
		break;
	case'update_POST';
		
		
		break;
	case'delete_GET';
		$_view ='/../Views/social_posting/delete.php';
		
		break;
	case'delete_POST';
		
		
		break;
	case'index_GET';
		include __DIR__.'/...Views/social_posting/index.php';
		
		break;
	default;
	$model = Social_posting::Get();
	$view ='/...Views/social_posting/index.php';
	
	
	
	
}
switch($format){
	case'plain';
		include __DIR__ . '/...Views/social_posting/';
		
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