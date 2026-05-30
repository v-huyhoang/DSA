<?php
class Solution
{

    /**
     * @param int[] $nums
     * @return bool
     */
    function containsDuplicate($nums)
    {
        $hash = [];
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            if (isset($hash[$nums[$i]])) {
                return true;
            }
            $hash[$nums[$i]] = true;
        }
        return false;
    }
}

$solution = new Solution();

$nums1 = [1, 2, 3, 1];
$nums2 = [1, 2, 3, 4];

var_dump($solution->containsDuplicate($nums1));
var_dump($solution->containsDuplicate($nums2));
