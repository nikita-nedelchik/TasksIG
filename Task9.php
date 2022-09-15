<?php

namespace src;

class Task9
{
    public function main($arr, $number)
    {
        if (!is_array($arr)) {
            throw new \InvalidArgumentException('Exception: the argument must be array');
        }
        if (!is_int($number)) {
            throw new \InvalidArgumentException('Exception: the argument must be int');
        }
        if ($number <= 0 || empty($arr) || count($arr) < 3) {
            throw new \InvalidArgumentException('Exception: the argument is incorrect');
        }
        foreach ($arr as $value) {
            if ($value < 0) {
                throw new \InvalidArgumentException('Exception: the argument is incorrect');
            }
        }

        return $this->getArr($arr, $number);
    }
    private function getArr(array $arr, int $number): array
    {
        $count = count($arr) - 2;
        for ($i = 0; $i < $count; $i++) {
            if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] === $number) {
                $res[] = "${arr[$i]} + ${arr[$i + 1]} + ${arr[$i + 2]} = $number";
            }
        }

        return $res;
    }
}

$obj = new Task9();

