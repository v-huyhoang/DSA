<?php
class Solution
{

    /**
     * @param int $x
     * @return bool
     */
    function isPalindrome($x)
    {
        if ($x < 0) return false;

        $original = $x;
        $reverse = 0;

        while ($x > 0) {
            $digit = $x % 10;
            $reverse = $reverse * 10 + $digit;

            $x = (int)($x / 10);
        }
        return $original == $reverse;
    }
}

$solution = new Solution();

$x1 = 121;
$x2 = -121;
$x3 = 10;

var_dump($solution->isPalindrome($x1));
var_dump($solution->isPalindrome($x2));
var_dump($solution->isPalindrome($x3));
