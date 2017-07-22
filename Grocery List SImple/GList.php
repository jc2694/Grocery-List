<?php

class GList
{
	private $id;
	private $name;
	private $items[];
	
	public function __construct($name, $id, $items)
	{
		$this->$name = $name;
		$this->$items = $items;
		$this->$id = $id;
	}
	
	public function getId()
	{
		return $id;
	}
	
	public function getName()
	{
		return $name;
	}
	
	public function getItems()
	{
		return $items;
	}

}

?>