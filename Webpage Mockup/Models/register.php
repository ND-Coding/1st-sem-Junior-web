<?php
	include_once __DIR__ . '/../inc/_all.php';
/**
 * 
 */
class register {
	
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
public static function Blank()
	{
		return array('username'=>null, 'password'=>null,'email'=>null,'phonenum'=>null
							,'weight'=>null,'fullname'=>null, 'cheatfood'=>null
						);
	}

static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			//$row2['Time'] = date( 'Y-m-d H:i:s', strtotime( $row2['Time'] ) );
			if (!empty($row['id'])) {
				$sql = "Update user
							Set username='$row2[username]', password = '$row2[password]',pace = '$row2[pace]',email = '$row2[email]',phonenum='$row2[phonenum]'
							,weight='$row2[weight]',fullname'$row2[fullname]';
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO user
						(username,password ,created_at ,email ,phonenum ,weight,fullname )
						VALUES ( '$row2[username]', '$row2[username]', Now(),'$row2[email]','$row2[phonenum]','$row2[weight]',
						'$row2[fullname]') ";
				$sql="
				INSERT INTO `login`
				(`username`, `password`) VALUES 
				('$row2[username]','$row2[username]')
				
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



	static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM user WHERE id = $id";
			echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();
			
			return $error ? array ('sql error' => $error) : false;
		}
	
	static public function Validate($row)
		{
			$errors = array();
			if(empty($row['username'])) $errors['username'] = "is required";
			if(empty($row['password'])) $errors['password'] = "is required";
			//if(empty($row['Name'])) $errors['Name'] = "is required";
			//if(empty($row['Calories'])) $errors['Calories'] = "is required";
			
			//if($row['Carbs'] >= 20) $errors['Carbs'] = "must less than 20";
			//if(empty($row['Carbs'])) $errors['Carbs'] = "is required";
			
			return count($errors) > 0 ? $errors : false ;
		}
	
	
	
	
	
	
}
