<?php

namespace saeed;

class Stringendswith
{
    // My solution:
    // function solution($str, $ending)
    // {

    // How can I get the last 7 characters of a PHP string?
    // https://stackoverflow.com/questions/10542310/how-can-i-get-the-last-7-characters-of-a-php-string
    // if ((substr($str, -strlen($ending)) == $ending) || $ending == "")
    //    return true;
    // }


    // Codewars solution:
    function solution($str, $ending): bool
    {
        return substr($str, -strlen($ending), strlen($ending)) == $ending;
    }


}


echo "<pre>";
print_r((new Stringendswith)->solution("samurai", "ai"));
echo "</pre>";
