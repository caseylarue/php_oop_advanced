<?php

class Animal 
{
	public $name;
	public $health;

	public function __construct()
	{
		$this->health = 100;
	}

	public function walk()
	{
		echo "Walk" . $this->health=$this->health-1 . "<br>";
		return $this;
	}

	public function run()
	{
		echo "Run" . $this->health=$this->health-1 . "<br>";
		return $this;
	}

	public function displayHealth()
	{
		//display name of the animal & health
		echo "total health = " . $this->health;
		return $this;
	}
}

$cat = new Animal();

$cat->run()->walk()->displayHealth();
?>