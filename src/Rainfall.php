<?php

namespace saeed;

use phpDocumentor\Reflection\DocBlock\Tags\Return_;


class Rainfall
{
    public function extract_town($town, $strng)/*:string*/
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
        return $aaa;


    }

    public function mean($)
    {
        // https://www.geeksforgeeks.org/php-program-find-standard-deviation-array/
        $riance = 0.0;
        $mean = array_sum($aaa) / count($aaa);


        foreach ($aaa as $i) {

            $riance += pow(($i - $mean), 2);
        }

        $varriance = (float)sqrt($riance / count($aaa));

        return $mean;
    }


}


include 'datafile.php';

// PHPStorm: undefined variables caused by include/require
// https://stackoverflow.com/questions/22476778/phpstorm-undefined-variables-caused-by-include-require
/**
 * @var string $data
 */

//echo "<pre>";
//print_r((new Rainfall)->extract_town("Bangkok", $data));
//echo "</pre>";


//echo "<pre>";
//print_r((new Rainfall)->variance("Bangkok", $data));
//echo "</pre>";


echo "<pre>";
print_r((new Rainfall)->mean("Bangkok", $data));
echo "</pre>";

