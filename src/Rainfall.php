<?php

namespace saeed;


class Rainfall
{
    public function extract_town($town1, $strng1)/*:string*/
    {

        // https://regex-generator.olafneumann.org/
        $nnn = preg_replace_callback('/[a-zA-Z]+:/', function ($matches) {
            return "  " . $matches[0];
        }, $strng1);


        $mmm = explode("  ", $nnn);

        $zzz = array_filter($mmm, function ($var) use ($town1) {
            return preg_match("/\b$town1\b/i", $var);
        });

        $sss = implode("", $zzz);

        // Replace multiple characters in one replace call:
        // https://stackoverflow.com/questions/16576983/replace-multiple-characters-in-one-replace-call
        $ggg = preg_replace('/[a-zA-Z]|:|,/', "", $sss);
        $yyy = ltrim($ggg);


        $bbb = explode(" ", $yyy);
        return $bbb;


    }

    public function mean($town, $strng)
    {

        $aaa = $this->extract_town($town, $strng);

        // https://www.geeksforgeeks.org/php-program-find-standard-deviation-array/
        $riance = 0.0;
        $mean = array_sum($aaa) / count($aaa);


        foreach ($aaa as $i) {

            $riance += pow(($i - $mean), 2);
        }

        return $mean;
    }

    public function variance($town, $strng)
    {

        $aaa = $this->extract_town($town, $strng);

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


include 'datafile.php';

// PHPStorm: undefined variables caused by include/require
// https://stackoverflow.com/questions/22476778/phpstorm-undefined-variables-caused-by-include-require
/**
 * @var string $data1
 */

//echo "<pre>";
//print_r((new Rainfall)->extract_town("Bangkok", $data));
//echo "</pre>";


//echo "<pre>";
//print_r((new Rainfall)->variance("Bangkok", $data));
//echo "</pre>";


echo "<pre>";
print_r((new Rainfall)->mean("London", $data1));
echo "</pre>";

