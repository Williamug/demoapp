<?php

// oop

class Vehicle
{
	public static $tyre = null;
	public string $exhaust = "Pipe";
	public $wiper;

	public static function move()
	{
		echo "This car can move using the" . static::$tyre;
	}

	public function makeSound(): string
	{
		return  "The car can make sound with {$this->exhaust}";
	}

	public function wipe()
	{
		echo "The car uses the {$this->wiper} to clean the windscreen";
	}
}

// inheritance
// abstraction
// interface
// etc.