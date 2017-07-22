<?php

class GListModel 
{
	const TABLE_NAME = "grocerylist";
	
	private $conn;
	
	public function __construct($con)
	{
		$this->$conn = $conn;
	}
	
	public function addGList($GList)
	{
		$sql = "INSERT INTO " . TABLE_NAME . " (name, items) VALUES (" . $GList->getname() . ", " . $GList->getItems() . ");";
		
		try 
		{
			mysqli_multi_query($conn, $sql);
		} 
		catch ($e) 
		{
			echo "I'm sorry, but the world ended with this message: " . $e->getMessage();
		}
	}
	
	public function getGList($GListId)
	{
		$query = "SELECT * FROM " . TABLE_NAME . " WHERE idgrocery = " . $GListId
		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) 
		{
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) 
			{
				$id = $row["id"];
				$name = $row["name"];
				$items = $row["items"];
				
				return new GList($id, $name, $items);
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