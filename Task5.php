<?php

namespace src;

class Task5
{
    public function main($n)
    {
        if (!is_int($n)) {
            throw new \InvalidArgumentException('invalid argument');
        }
        if ($n < 0) {
            throw new \InvalidArgumentException('invalid argument');
        }

        return $this->test($n);
    }

    private function test(int $n): int
    {
        foreach ($this->getFibonacci($n) as $i) {
            if ($i >= $n) {
                $res = $i;

                break;
            }
        }

        return $res;
    }
    private function getFibonacci($num): \Generator
    {
        $recursion = function ($num) use (&$recursion) {
            return $num < 2 ? $num : $recursion($num - 1) + $recursion($num - 2);
        };
        for ($i = 0; ; $i++) {
            yield $recursion($i);
        }
    }
}

$task5 = new Task5();
