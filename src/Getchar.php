<?php
//
//final class Getchar
//{
//    private $getchar;
//
//    private function __construct($c)
//    {
//        $this->getchar = $getchar;
//    }
//
//    function getchar($c): string
//    {
//        return chr($c);
//
//    }
//}
//
//$Getchar = new Getchar();

//$getchar = new Getchar();
//echo $getchar->getchar();







//function getchar($c){
//    return chr($c);
//}
//echo getchar(75);


class Fruit {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit("Apple");
echo $apple->get_name();

