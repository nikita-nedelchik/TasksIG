<?php

namespace src;

class Task7
{
    public function main($arr, $number)
    {
        if (!is_array($arr)) {
            throw new \InvalidArgumentException('Exception: the argument must be array');
        }
        if (!is_int($number)) {
            throw new \InvalidArgumentException('Exception: the argument must be int');
        }
        if ($number < 0 || empty($arr) || $number >= count($arr)) {
            throw new \InvalidArgumentException('Exception: the argument is incorrect');
        }

        return $this->getArray($arr, $number);
    }
    private function getArray(array $arr, int $position): array
    {
        array_splice($arr, $position, 1);

        return $arr;
    }
}

$myArr = [2, 3, 3, 4];
$obj = new Task7();
