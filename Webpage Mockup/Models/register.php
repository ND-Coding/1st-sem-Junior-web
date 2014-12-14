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
		return array('username'=>null, 'password'=>null,',pace'=>null,'email'=>null,'phonenum'=>null
							,'weight'=>null,'sunday'=>'no','monday'=>'no','tuesday'=>'no',
						'wednesday'=>'no','thursday'=>'no','friday'=>'no','saturday'=>'no','fullname'=>null, 'cheatfood'=>null
						);
	}

static public function Save(&$row)
		{
			$conn = GetConnection();
			
			$row2 = escape_all($row, $conn);
			//$row2['Time'] = date( 'Y-m-d H:i:s', strtotime( $row2['Time'] ) );
			if (!empty($row['id'])) {
				$sql = "Update user
							Set username='$row2[username]', password='$row2[password]',pace = '$row2[pace]',email = '$row2[email]',phonenum='$row2[phonenum]'
							,weight='$row2[weight]',sunday='$row2[sunday]',monday='$row2[monday]',tuesday='$row2[tuesday]',
						wednesday='$row2[wednesday]',thursday='$row2[thursday]',friday='$row2[friday]',saturday='$row2[saturday]',fullname'$row2[fullname];				'
						WHERE id = $row2[id]
						";
			}else{
				$sql = "INSERT INTO user
						(username,password ,created_at ,pace ,email ,phonenum ,weight,sunday,monday,tuesday,wednesday,thursday, friday, saturday,fullname )
						VALUES ( '$row2[username]', '$row2[password]', Now(),'$row2[pace]','$row2[email]','$row2[phonenum]','$row2[weight]','$row2[sunday]','$row2[monday]','$row2[tuesday]',
						'$row2[wednesday]','$row2[thursday]','$row2[friday]','$row2[saturday]','$row2[fullname]'  ) 
						INSERT INTO login (`id`, `username`, `password`) VALUES ($row2[id],'$row2[username]','$row2[password]')
						";
										
			}
			
			
			my_print( $sql );
			
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
