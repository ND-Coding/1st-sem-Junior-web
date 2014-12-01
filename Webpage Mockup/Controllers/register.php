<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


include_once __DIR__ . '/../inc/_all.php';

$action = isset($_REQUEST['action'])?$_REQUEST['action'] :null;
$method = isset($_REQUEST['HTTP_METHOD'])?$_REQUEST['HTTP_METHOD'] :'GET';
$view = null;
$format = isset($_REQUEST['action'])?$_REQUEST['action'] :'web';

switch($action.'_'.$method){
	case'create_GET':
	

		$_view ='register/edit.php';
		include __DIR__.'/.../Views/register/edit.php';
		$_view = 'register/edit.php';
		include __DIR__ . '/../Views/register/edit.php';

		$model=register::Blank();
		break;
	case'create_POST':
		my_print($_REQUEST);
		
		break;
		
	case'update_GET':
		include __DIR__.'/../Views/register/edit.php';
		$model = Register::Get();
		
		break;
	case'update_POST';
		
		
		break;
	case'delete_GET':
		$_view ='/../Views/register/delete.php';
		
		break;
	case'delete_POST':
		
		
		break;
	case'index_GET':
		include __DIR__.'/...Views/register/index.php';
		
		break;
	default;

	default:

	$model = Food::Get();
	$view ='/...Views/register/index.php';
	
	
	break;
	
}
switch($format){
	case'plain';
		include __DIR__ . '/...Views/register/';
		
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