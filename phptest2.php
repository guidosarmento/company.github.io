
echo "<br>";
echo "<br>";

$color = "red";
// This is a single-line comment
echo "My car is " . $color . "<br>" ;
echo "My house is " . $color. "<br>";
echo "My boat is " .$color . "<br>";

echo "<br>";
$x = 5 /* + 15 */ + 5;
echo $x;

echo "<br>";
$txt = "W3Schools.com";
echo "I love " . $txt . "!";

echo "<br>";
$x = 5;
$y = 4;
echo $x + $y



echo "<br>";
$x = 5; // global scope
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

//TYPE VARIABLE INT, BOOLEAN, FLOAT//
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
var_dump(is_float($x));
$x = 1.9e411;
var_dump($x);


$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));


//TEST VARIABLE CAR//

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();

//TEST MATEMATHICS //

echo(pi()); echo "<br>";// returns 3.1415926535898 
echo(min(0, 150, 30, 20, -8, -200)); echo "<br>"; // returns -200
echo(max(0, 150, 30, 20, -8, -200)); echo "<br>"; // returns 150

echo(abs(-6.7));
echo "<br>";
echo(sqrt(64));
echo "<br>";
echo(round(0.60));  // returns 1
echo "<br>";
echo(round(0.49));  // returns 0
echo "<br>";
echo(rand(10, 100)); //RANDOM INTEGER BETWEEN 10 AND 100

//IF, IF ELSE, IF ELSEIF ELSE//
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";

$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

$a = 50;
$b = 10;
 if ($a > $b)  {
  echo "Hello World";
}
