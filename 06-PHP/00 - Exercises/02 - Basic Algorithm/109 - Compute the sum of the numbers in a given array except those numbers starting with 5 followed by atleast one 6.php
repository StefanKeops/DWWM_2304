<?php
function test($nums)
{
    $sum = 0;
    $inSection = 0;
    $flag = 0;
    for ($i = 0; $i < sizeof($nums); $i++) {
        $inSection = 0;
        if ($nums[$i] == 5) {
            $inSection = 0;
            $flag = 1;
        }
        if ($inSection == 0 && $nums[$i] == 6) {
            if ($flag == 1) {
                $sum = $sum - 5;
                $inSection = 1;
            }
            $flag = 0;
        }
        if ($inSection == 0) {
            $sum += $nums[$i];
        }
    }
    return $sum;
}
echo "Sum of the numbers of the said array except those numbers starting with 5 followed by atleast one 6:\n" . test([1, 5, 7, 9, 10, 17]);
echo "<br>";
echo "\nSum of the numbers of the said array except those numbers starting with 5 followed by atleast one 6:\n" . test([1, 5, 6, 9, 10, 17]);
echo "<br>";
echo "\nSum of the numbers of the said array except those numbers starting with 5 followed by atleast one 6:\n" . test([5, 6, 7, 9, 10, 17, 1]);
echo "<br>";
echo "\nSum of the numbers of the said array except those numbers starting with 5 followed by atleast one 6:\n" . test([11, 9, 10, 17, 5, 6]);
