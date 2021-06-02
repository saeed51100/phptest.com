<?php

namespace saeed;

class Dashatizeit
{

    public function dashatize(int $num): string
    {
        // This my solution but not complete:
        // return preg_replace_callback('/\d/', function ($matches) {
        //     return !($matches[0] % 2 == 0) ? "-" . $matches[0] . "-" : $matches[0];
        // }, $num );


        // https://github.com/jessynt/Codewars/blob/master/PHP/dashatize.php
        // $str_arr = str_split(abs($num));
        // $string = '';
        // foreach ($str_arr as $key => $value) {
        //     if ($value % 2 == 0) {
        //         $string .= $value;
        //     } else {
        //         $string .= $key == 0 ? "$value-" : "-$value-";
        //     }
        // }
        // return rtrim(preg_replace('/--/', '-', $string), '-');


        // codewars solution:
        return trim(str_replace('--', '-', preg_replace('/([13579])/','-$1-', $num)), '-');



    }


}

echo (new Dashatizeit)->dashatize(5311);


