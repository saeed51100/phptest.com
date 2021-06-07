<?php

namespace saeed;

use phpDocumentor\Reflection\DocBlock\Tags\Return_;


class Rainfall
{
    public function solution($town, $strng)/*:string*/
    {

        // https://regex-generator.olafneumann.org/
        $nnn = preg_replace_callback('/[a-zA-Z]+:/', function ($matches) use ($town) {
            return "  " . $matches[0];
        }, $strng);

        $mmm = explode("  ", $nnn);

        $zzz = array_filter($mmm, function ($var) use ($town) {
            return preg_match("/\b$town\b/i", $var);
        });
        $sss = implode("", $zzz);

        // Replace multiple characters in one replace call:
        // https://stackoverflow.com/questions/16576983/replace-multiple-characters-in-one-replace-call
        $ggg = preg_replace('/[a-zA-Z]|:|,/', "", $sss);
        $yyy = ltrim($ggg);


        $aaa = explode(" ", $yyy);


        // https://www.geeksforgeeks.org/php-program-find-standard-deviation-array/
        $riance = 0.0;
        $mean = array_sum($aaa) / count($aaa);


        foreach ($aaa as $i) {

            $riance += pow(($i - $mean), 2);
        }

        $varriance = (float)sqrt($riance / count($aaa));
        return $varriance;



    }


}


include 'dsd1.php';

// PHPStorm: undefined variables caused by include/require
// https://stackoverflow.com/questions/22476778/phpstorm-undefined-variables-caused-by-include-require
/**
 * @var string $data
 */


echo (new Rainfall)->solution("Bangkok", $data);
