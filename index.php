<?php

class test
{
    public function getSubtractedNumNotLessThanZero($nums)
    {
        if (count($nums) == 0) {
            return "error, array is emty";
        }

        $criteria = [];
        foreach ($nums as $substractedValue) {
            foreach ($nums as $value) {
                if (($substractedValue - $value) < 0) {
                    // do nothing
                } else {
                    $criteria[$substractedValue][] = $substractedValue;
                }
            }
        }

        $newCreteria = [];
        foreach ($criteria as $row) {
            if (count($row) == count($nums)) {
                $newCreteria[] = $row[0];
            }
        }

        return $newCreteria;
    }

    public function getDividedNumEqualsX($nums, $x)
    {
        $criteria = [];
        foreach ($nums as $v1) {
            foreach ($nums as $v2) {
                if (($v1 / $v2) != $x) {
                    $criteria[$v1][] = $v1;
                }
            }
        }

        $criteria2 = [];
        foreach ($criteria as $v) {
            if (count($v) == count($nums)) {
                $criteria2[] = $v[0];
            }
        }

        return $criteria2;
    }

    public function getWordLengthEqualX($word, $x)
    {
        $criteria = [];
        $wordArray = explode(" ", $word);

        foreach ($wordArray as $w) {
            if (strlen($w) == $x) {
                $criteria[] = $w;
            }
        }

        return $criteria;
    }
}

// Try example case
echo '<pre>';

// create object test
$test = new test();

// case no. 1
$nums = [3, 1, 4, 2];
print_r($test->getSubtractedNumNotLessThanZero($nums));

// case no. 2
$nums = [1, 2, 3, 4, 5];
$x = 5;
print_r($test->getDividedNumEqualsX($nums, $x));

// case no. 3
$word = "souvenir loud four lost";
$x = 4;
print_r($test->getWordLengthEqualX($word, $x));
