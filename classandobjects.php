<!-- A class is a template for objects, and an object is an instance of class -->

<!-- 
	OOP Case
	Let's assume we have a class named Fruit. A Fruit can have properties like name, color, weight, etc. We can define variables like $name, $color, and $weight to hold the values of these properties.

	When the individual objects (apple, banana, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
-->

<!-- 
	Define a Class
	
	A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods goes inside the braces.
-->

<?php
	// class Fruit {
  		// code goes here...
	// }
?>

<!-- 
	Below we declare a class named Fruit consisting of two properties ($name and $color) and two methods set_name() and get_name() for setting and getting the $name property: 
-->

<?php
	class Fruit{
		//Properties
		public $name;
		public $color;

		// Methods
		function set_name($name){
			$this->name = $name; //euivalent to : $apple->name="Apple"; | from example below
			// $this->name denotes the inherited $name property 
			// of the object thats created from the class 'Fruit'
			// lets say if we create an object like: $apple=new Apple();
			// then apple has inherited all the properties and methods of 'Fruit' class
			// we can call set_name() function like: $apple->set_name("Apple");
		}

		function get_name($name){
			return $this->name;
		}
	}
?>

<!-- Note: In a class, variables are called properties and functions are called methods! -->

