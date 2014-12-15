<?php
	include_once __DIR__ . '/../inc/_all.php';
/**
 * 
 */
class Today {
	
	public static function Get($id=null)
	{
		$sql = "	SELECT * FROM `user_food`
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
		return array('food'=>null, 'food type'=>null,'calories'=>null,'fat'=>null,'fiber'=>null,'carbs'=>null,'time'=>date(strtotime('tomorrow'))
						);
	}

static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			$row2['time'] = date( 'Y-m-d H:i:s', strtotime( $row2['time'] ) );
			if (!empty($row['id'])) {
				$sql = "	UPDATE user_food 
							SET `created_at`=,`updated_at`=[value-3],`food`='$row2[food]',`food type`='$row2[food_type]',
							`calories`='$row2[calories]',`fat`='$row2[fat]',`fiber`='$row2[fiber]',`carbs`='$row2[carbs]', time='$row2[time]';				'
						WHERE id = $row2[id] 
						";
			}else{
				$sql = "INSERT INTO user_food
				(`created_at`, `updated_at`, `food`, `food type`, `calories`, `fat`, `fiber`, `carbs`) 
				VALUES '$row2[time]',Now(), '$row2[food]','$row2[food_type]','$row2[calories]','$row2[fat]','$row2[fiber]','$row2[carbs]')";				
				$sql ="
				INSERT INTO `friends`(`friend`) VALUES ('$row2[friend]')
				
				";
			
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
public static function Search($q)
	{
		$sql = "	SELECT * FROM `user_food` WHERE 1
					
					WHERE food LIKE '%$q%'
		";
		return FetchAll($sql);			
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
			
			

			//if(empty($row['Name'])) $errors['Name'] = "is required";
			//if(empty($row['Calories'])) $errors['Calories'] = "is required";
			
			//if($row['Carbs'] >= 20) $errors['Carbs'] = "must less than 20";
			//if(empty($row['Carbs'])) $errors['Carbs'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	
}
