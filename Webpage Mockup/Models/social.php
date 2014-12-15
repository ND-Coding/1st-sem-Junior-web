<?php
	include_once __DIR__ . '/../inc/_all.php';
/**
 * 
 */
class social {
	
	public static function Get($id=null)
	{
		$sql = "	SELECT * FROM pics
		";
		if($id){
			$sql .= " WHERE id=$id ";
			$ret = FetchAll($sql);
			return $ret[0];
		}else{
			return FetchAll($sql);			
		}
	}	
	public static function Blank()
	{
		return array('before'=>null,'after'=>null
						);
	}

static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			if (!empty($row['id'])) {
				$sql = "Update pics
							Set before='$row2[before]', after='$row2[after]';
						WHERE id = $row2[id];
						";
			}else{
				$sql = 
				"INSERT INTO `pics`(`before`, `after`) VALUES ('$row2[before]', '$row2[after]')";				
			}
			
			
			//my_print( $sql );
			
			$results = $conn->query($sql);
			$error = $conn->error;
			
			if(!$error && empty($row['id'])){
				$row['id'] = $conn->insert_id;
			}
			
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}



	static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM pics WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
	
	static public function Validate($row)
		{
			$errors = array();
			if(empty($row['after'])) $errors['after'] = "is required";
			if(empty($row['before'])) $errors['before'] = "is required";
			//if(empty($row['Calories'])) $errors['Calories'] = "is required";
			
			//if($row['Carbs'] >= 20) $errors['Carbs'] = "must less than 20";
			//if(empty($row['Carbs'])) $errors['Carbs'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	
	

}
