<?php
function test($nums1, $nums2)
{

    return [$nums1[0], $nums1[1], $nums1[2], $nums2[0], $nums2[1], $nums2[2]];
}

$result = test([10, 20, 30], [40, 50, 60]);
echo "New array: " . implode(',', $result);
