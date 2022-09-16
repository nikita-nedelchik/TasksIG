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

        return (int)$res;
    }
    private function getFibonacci($n)
    {
        $recursion = function ($n) use (&$recursion) {
            return $n < 2 ? $n : $recursion($n - 1) + $recursion($n - 2);
        };
        for ($i = 0; ; $i++) {
            yield $recursion($i);
        }
    }
}

$task5 = new Task5();
