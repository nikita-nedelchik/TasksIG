<?php

namespace src;

class Task9
{
    public function main($arr, $number)
    {
        try {
            if (!is_array($arr)) {
                throw new \InvalidArgumentException('Exception: the argument must be array');
            }
            if (!is_int($number)) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            }
            if ($number <= 0 || empty($arr)) {
                throw new \InvalidArgumentException('Exception: the argument is incorrect');
            }

            return $this->getArr($arr, $number);
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
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
$res = $obj->main([2, 7, 7, 1, 2, 2, 12, 2, 2], 16);
