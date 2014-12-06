<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


include_once __DIR__ . '/../inc/_all.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
$method = $_SERVER['REQUEST_METHOD'];
$format = isset($_REQUEST['format']) ? $_REQUEST['format'] : 'web';
$view 	= null;

switch($action. '_' .$method){
	case 'create_GET':	
		$model = schedule::Blank();
		$view = "schedule/edit.php";
		break;
		
	case 'save_POST':
			$sub_action = empty($_REQUEST['id']) ? 'created' : 'updated';
			$errors = schedule::Validate($_REQUEST);
			if(!$errors){
				$errors = schedule::Save($_REQUEST);
			}
			
			if(!$errors){
				if($format == 'json'){
					header("Location: ?action=edit&format=json&id=$_REQUEST[id]");
				}else{
					header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				}
				die();
			}else{
				//my_print($errors);
				$model = $_REQUEST;
				$view = "schedule/edit.php";		
			}
			break;
	case 'delete':
			if($_SERVER['REQUEST_METHOD'] == 'GET'){
				//Promt
			}else{
				
			}
			break;
		break;
	case 'edit_GET':
		$model = schedule::Get($_REQUEST['id']);
		$view = "schedule/edit.php";		
		break;
		
	case 'delete_GET':
		$model = schedule::Get($_REQUEST['id']);
		$view = "schedule/delete.php";
		
		break;
		
	case 'delete_POST':
		$errors = schedule::Delete($_REQUEST['id']);
		if($errors){
				$model = schedule::Get($_REQUEST['id']);
				$view = "schedule/delete.php";
		}else{
				header("Location: ?sub_action=$sub_action&id=$_REQUEST[id]");
				die();			
		}
		
		break;
		
	case 'index_GET':		
	default:
			$model = schedule::Get();
			$view = '/../Views/schedule/index.php';
	break;
	
}
switch($format){
	case'plain';
		include __DIR__ . "/../Views/$view";
		
		break;
	case 'json';
		echo json_encode($model);
		break;
		
	case 'web';
		default:
			include  __DIR__ . '/../Views/shared/_Template.php';
		break;
	
	
	
	
	
}