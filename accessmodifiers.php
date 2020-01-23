<!DOCTYPE html>
<html>
<body>


<!--
PHP - Access Modifiers
Properties and methods can have access modifiers which control where they can be accessed.

There are three access modifiers:

public - the property or method can be accessed from everywhere. This is default
protected - the property or method can be accessed within the class and by classes derived from that class
private - the property or method can ONLY be accessed within the class

In the following example we have added three different access modifiers to the three properties. Here, if you try to set the name property it will work fine (because the name property is public). However, if you try to set the color or weight property it will result in a fatal error (because the color and weight property are protected and private):
-->
<?php
class Fruit {
	public $name;
	protected $color;
	private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
// echo $mango->name;
// $mango->color = 'Yellow'; // ERROR
// echo $mango->color;
// $mango->weight = '300'; // ERROR
// echo $mango->color;

?>



<!--
In the next example we have added access modifiers to two methods. Here, if you try to call the set_color() or the set_weight() function it will result in a fatal error (because the two functions are considered protected and private), even if all the properties are public:
-->
<?php
class FruitA {
	public $name;
	public $color;
	public $weight;

	function set_name($n) {
		// a public function (default)
		$this->name = $n;
	}
	protected function set_color($n) {
		// a protected function
		$this->color = $n;
	}
	private function set_weight($n) {
		// a private function
		$this->weight = $n;
	}
}

$mangoa = new FruitA();
$mangoa->set_name('Mango'); // OK
echo $mangoa->name;
// $mangoa->set_color('Yellow'); // ERROR
// echo $mangoa->color;
// $mangoa->set_weight('300'); // ERROR
// echo $mangoa->weight;

?>

</body>
</html>