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

        // https://www.ajdesigner.com/php_code_statistics/variance_sample.php
        // calculate the mean

        $the_mean = array_sum($aaa) / count($aaa);

        return $the_mean;
    }

    public function variance($town, $strng)
    {

        $aaa = $this->extract_town($town, $strng);

        // https://www.ajdesigner.com/php_code_statistics/variance_sample.php
        // calculate the variance
        $the_variance = 0.0;
        $the_mean = array_sum($aaa) / count($aaa);
        for ($i = 0; $i < count($aaa); $i++) {
            //sum the array
            $the_variance = $the_variance + ($aaa[$i] - $the_mean) * ($aaa[$i] - $the_mean);
        }

        $the_variance = $the_variance / (count($aaa) /*- 1.0*/);

        //return the variance
        return $the_variance;

    }


}


include 'datafile.php';

// PHPStorm: undefined variables caused by include/require
// https://stackoverflow.com/questions/22476778/phpstorm-undefined-variables-caused-by-include-require
/**
 * @var string $data1
 * @var string $data2
 */



echo "<pre>";
print_r((new Rainfall)->variance /*mean*/ ("London", $data1));
echo "</pre>";

