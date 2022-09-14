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
            } elseif ($number < 0 || empty($arr) || $number >= count($arr)) {
                throw new \InvalidArgumentException('Exception: the argument is incorrect');
            }

            return $this->getArray($arr, $number);
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

$myArr = [2, 3, 3, 4];
$obj = new Task7();
$obj->main($myArr, 2);
