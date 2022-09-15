<?php

namespace src;

class Task3
{
    public function main($inputNumber)
    {
        if (!is_int($inputNumber)) {
            throw new \InvalidArgumentException('Exception: the argument must be int');
        }
        if ($inputNumber < 10) {
            throw new \InvalidArgumentException('Exception: the argument must more than 10');
        }

        return $this->test($inputNumber);
    }

    private function test(int $inputNumber): int
    {
        return ($inputNumber - 1) % 9 + 1;
    }
}

$task1 = new Task3();
echo $task1->main(9);
