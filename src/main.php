<?php
function vertMirror($s)
{
    // How to explode a multi-line string?
    // https://stackoverflow.com/questions/6162912/how-to-explode-a-multi-line-string
    return implode("\n", array_reverse(explode("\n", strrev($s))));
}
function horMirror($s)
{
    return implode("\n", array_reverse(explode("\n", $s)));
}
function oper($fct, $s)
{
    if ($fct == 'horMirror')
        return horMirror($s);
    else
        return vertMirror($s);
}

print_r(oper('horMirror', "abcd\nefgh\nijkl\nmnop\n"));