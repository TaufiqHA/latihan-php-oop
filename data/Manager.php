<?php

class Manager
{
	var string $name;

	function sayHello(string $name): void
	{
		echo "Hi $name, my name is $this->name" . PHP_EOL;
	}
}

class vicePresident extends Manager
{
	public function sayHello(string $name): void
	{
		echo "hi $name, my name is vp $this->name";
	}
}
