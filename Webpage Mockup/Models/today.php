<?php
	include_once __DIR__ . '/../inc/_all.php';
/**
 * 
 */
class Today {
	
	public static function Get($id=null)
	{
		$sql = "	SELECT * FROM user
		";
		if($id){
			$sql .= " WHERE id=$id ";
			$ret = FetchAll($sql);
			return $ret[0];
		}else{
			return FetchAll($sql);			
		}
	}

}
