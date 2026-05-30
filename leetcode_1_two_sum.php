<?php
class Solution
{
    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target)
    {
        $hash = [];
        $count = count($nums);
        for ($i = 0; $i < $count; $i++) {
            $needed = $target - $nums[$i];
            if (isset($hash[$needed])) {
                return [$hash[$needed], $i];
            }
            $hash[$nums[$i]] = $i;
        }
        return [];
    }
}

$solution = new Solution();

$nums1 = [2, 7, 11, 15];
$target1 = 9;
$nums2 = [1, 2, 3, 4];
$target2 = 6;

var_dump($solution->twoSum($nums1, $target1));
var_dump($solution->twoSum($nums2, $target2));
