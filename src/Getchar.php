<?php

final class Getchar
{
    private $getchar;

    private function __construct($getchar)
    {
        $this->getchar = $getchar;
    }

    function getchar($c): string
    {
        return chr($c);

    }
}

//$getchar = new Getchar();
//echo $getchar->getchar();







//function getchar($c){
//    return chr($c);
//}
//echo getchar(75);


class User{

    public function __construct(){

        echo 'wpmen.ir';

    }

}

$User = new User();

