<?php

namespace saeed;



    function diag1Sym($s)
    {

        $a = explode("\n", $s);
        foreach ($a as $key => $value) {
            foreach ($a as $keya => $valuea) {
                $zz1[$key][$keya] = $a[$keya][$key];

            }
        }


        foreach ($zz1 as $value) {
            $output[] = implode('', $value);
        }

        return implode("\n", $output);


    }


    function rot90Clock($s)
    {
//        return $s;
//        $s = diag1Sym($s);
        return implode("\n", array_reverse(explode("\n", strrev(diag1Sym($s)))));
    }


    function selfieAndDiag1($s)
    {
        $a = explode("\n", $s);

        $imp = explode("\n", diag1Sym($s));
        foreach ($a as $key => $value) {
            $output2[$key] = $a[$key] . "|" . $imp[$key];
        }

        return implode("\n", $output2);
    }


    // Codewars function:
    function oper($fct, $s)
    {
        return $fct($s);
    }




echo "<pre>";
oper('rot90Clock', "abcd\nefgh\nijkl\nmnop");
echo "</pre>";

//print_r((new Movesinsquaredstrings3)->sortArray([5, 3, 2, 8, 1, 4]));


