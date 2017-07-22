<?php

class User
{
	private $id;
	private $name;
	private $email;
	private $lists[];
	
	public function __construct($name, $email, $lists[])
	{
		$this->$name = $name;
		$this->$email = $email;
		$this->$lists = $lists;
	}
	
	public function getId()
	{
		return $id;
	}
	
	public function getName()
	{
		return $name;
	}
	
	public function getEmail()
	{
		return $email;
	}
	
	public function getLists()
	{
		return $lists;
	}
	
	public function addList($list)
	{
		$lists[] = $list;
	}
}

?>