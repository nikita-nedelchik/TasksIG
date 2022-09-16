<?php

namespace src;

class Task5
{
    public function main(int $n): string
    {
        if (!is_int($n)) {
            throw new \InvalidArgumentException('invalid argument');
        }
        if ($n < 0) {
            throw new \InvalidArgumentException('invalid argument');
        }
        $first[0] = 1;
        $first[1] = 1;
        $fibNum = '';
        for ($i = 2; ; $i++) {
            $first[$i % 2] = $first[0] + $first[1];
            $fibNum = $first[$i % 2];
            if (strlen($fibNum) >= $n) {
                break;
            }
        }
        return $fibNum;
    }
}

$task5 = new Task5();
echo $task5->main(5);

