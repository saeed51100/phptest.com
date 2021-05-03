<?php

class Getchar {
    public $name;

    function __construct($name) {
        $this->name = chr($name);
    }
    function get_name() {

        return $this->name;
    }
}

$apple = new Getchar(74);
echo $apple->get_name();




//function getchar($c){
//    return chr($c);
//}


