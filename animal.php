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
		echo "Walk " . $this->health=$this->health-1 . "<br>";
		return $this;
	}

	public function run()
	{
		echo "Run " . $this->health=$this->health-1 . "<br>";
		return $this;
	}

	public function displayHealth()
	{
		echo "total health = " . $this->health. " Class: ".  get_class($this);
		return $this;
	}
}

class Dog extends Animal 
{
	public function __construct()
	{
		$this->health = 150;
	}

	public function pet()
	{
		echo "Pet ". $this->health=$this->health+5 . "<br>";
		return $this;
	}
}

class Dragon extends Animal
{
	public function __construct()
	{
		$this->health = 170;
	}

	public function fly()
	{
		echo "Fly " . $this->health=$this->health-10 . "<br>";
		return $this;
	} 

	public function displayHealth()
	{
		echo "this is a dragon <br>";
		parent::displayHealth();

	}

}




$dragon1 = new Dragon();
$dragon1->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();


$dog1 = new Dog();
$dog1->walk()->walk()->walk()->run()->run()->pet()->displayHealth();


$cat = new Animal();
$cat->run()->walk()->displayHealth();
$cat->displayHealth();


$animal = new Animal();
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

?>