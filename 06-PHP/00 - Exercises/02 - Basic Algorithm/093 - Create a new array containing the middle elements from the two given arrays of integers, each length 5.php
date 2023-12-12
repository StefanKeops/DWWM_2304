<?php
function test($nums1, $nums2)
{
    return [$nums1[2], $nums2[2]];
}

$nums1 = [10, 20, -30, -40, 30];
$nums2 = [10, 20, 30, 40, 30];
echo "Original array1: " . implode(',', $nums1) . "\n";
echo "Original array2: " . implode(',', $nums1) . "\n";

$result = test($nums1, $nums2);

echo "New array: " . implode(',', $result);
