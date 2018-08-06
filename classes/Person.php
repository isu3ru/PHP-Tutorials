<?php 
class Person {

	private $name;
	private $age;

	function __construct($name, $age = 0) {
		$this->name = $name;
		$this->age = $age;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function mySelf()
	{
		echo "Hello, my name is " . $this->name . ". I am " . $this->age . " years old.";
	}

}

class Teacher extends Person {

}
