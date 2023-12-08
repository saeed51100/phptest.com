<?php
function scale($strng, $k, $v)
{
    // duplicate every character:
    //https://stackoverflow.com/questions/9550769/passing-additional-arguments-to-preg-replace-callback-using-php-5-2-6?noredirect=1&lq=1
    $yyy = preg_replace_callback('/[a-zA-Z]/',
        function ($matches) use ($k) {
            return str_repeat($matches[0], $k);
        },
        $strng);
    // duplicate words:
    $zzz = preg_replace_callback('/[a-zA-Z]+/',
        function ($matches) use ($v) {
            return str_repeat(($matches[0] . "\n"), $v);
        },
        $yyy);
    // remove blank lines from text in PHP?
    // https://stackoverflow.com/questions/709669/how-do-i-remove-blank-lines-from-text-in-php
    $aaa = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $zzz);
    // Remove trailing newline.
    // https://stackoverflow.com/questions/3530099/remove-trailing-newline
    return preg_replace('/\n$/', '', $aaa);
}

print_r(scale("abcd\nefgh\nijkl\nmnop", 2, 3));