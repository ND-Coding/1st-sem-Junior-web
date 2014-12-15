<?php
	include_once __DIR__ . '/../inc/_all.php';
/**
 * 
 */
class schedule {
	
	public static function Get($id=null)
	{
		$sql = "	SELECT * FROM workout
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
		return array('type'=>null, 'time'=>null,',hours'=>null,'day'=>null,
						);
	}

static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			//$row2['Time'] = date( 'Y-m-d H:i:s', strtotime( $row2['Time'] ) );
			if (!empty($row['id'])) {
				$sql = "UPDATE `workout` 
				SET `type`='$row2[type]',`hours`='$row2[hours]',`day`='$row2[day]';				'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO `workout`( `type`, `time`, `hours`, `day`)
				 VALUES ('$row2[type]',Now(),'$row2[hours]','$row2[day]')";		
				$sql="
				INSERT INTO `friends`
				(`friend`) 
				VALUES ('$row2[friend]')
				
				"	;	
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
			$sql = "DELETE FROM user WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
	
	static public function Validate($row)
		{
			$errors = array();
			//if(empty($row['hours'])) $errors['hours'] = "is required";
			//if(empty($row['body'])) $errors['body'] = "is required";
			//if(empty($row['day'])) $errors['day'] = "is required";
			//if(empty($row['Name'])) $errors['Name'] = "is required";
			//if(empty($row['Calories'])) $errors['Calories'] = "is required";
			
			//if($row['Carbs'] >= 20) $errors['Carbs'] = "must less than 20";
			//if(empty($row['Carbs'])) $errors['Carbs'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	
	
	
	
	
	
}
