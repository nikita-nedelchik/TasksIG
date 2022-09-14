<?php

namespace src;

class Task7
{
    public function main($arr, $number)
    {
        try {
            if (!is_array($arr)) {
                throw new \InvalidArgumentException('Exception: the argument must be array');
            } elseif (!is_int($number)) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            }
            if (!empty($arr) && $number >= 0 && $number < count($arr)) {
                return $this->getArray($arr, $number);
            }
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    private function getArray(array $arr, int $position): array
    {
        array_splice($arr, $position, 1);

        return $arr;
    }
}

$myArr = [1, 2, 3, 4, 5];
$obj = new Task7();
$obj->main($myArr, 3);
