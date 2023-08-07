 <?php


class Fruit {

    private $name;
    private $color;

    public function __construct($name, $color)
     {
        $this->name = $name;
        $this->color = $color;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function get_name() {
        return $this->name;
    }
}

$cucumber = new Fruit("cucumber", "brown");
$orange = new Fruit("orange", "lemon green");
$grape = new Fruit("grape", "maroon");
$banana = new Fruit("banana", "green");

echo $cucumber->get_name(); // cucumber
echo $orange->get_name(); // orange
echo $grape->get_name(); // grape
echo $banana->get_name(); // banana

/*This code defines a class called Fruit with two properties: name and color. 
It also defines two methods: set_name() and get_name(). 
The set_name() method sets the value of the name property, and the get_name() method returns the value of the name*/

?>
