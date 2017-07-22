<?php

class UserModel 
{
	const TABLE_NAME = "users";
	
	private $conn;
	
	public function __construct($con)
	{
		$this->$conn = $conn;
	}
	
	public function addUser($user)
	{
		$sql = "INSERT INTO " . TABLE_NAME . " (name, email) VALUES (" . $user->getname() . ", " . $user->getEmail() . ");";
		
		try 
		{
			mysqli_multi_query($conn, $sql);
		} 
		catch ($e) 
		{
			echo "I'm sorry, but the world ended with this message: " . $e->getMessage();
		}
	}
	
	public function getUser($userId)
	{
		$query = "SELECT * FROM " . TABLE_NAME . " WHERE idUser = " . $userId . ";";
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) 
		{
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) 
			{
				$id = $row["id"];
				$name = $row["name"];
				$email = $row["email"];
				
				return new User($id, $name, $email);
			}
		} 
		else 
		{
			return null;
		}
	}
	
	public function closeDb()
	{
		mysqli_close($conn);
	}
}

?>