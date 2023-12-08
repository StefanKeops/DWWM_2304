<?php
$str  = "@88 + 1 = 1@80";
$index = 0;
$result = array();
while ($index < strlen($str)) {
    $t = $str[$index++];
    if ($t == "@") {
        $len = $str[$index++];
        $char = $str[$index++];
        $run = "";
        for ($i = 0; $i < $len; $i++) {
            $run .= $char;
        }
        $result[] = $run;
    } else {
        $result[] = $t;
    }
}
echo implode("", $result);
