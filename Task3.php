<?php

namespace src;

class Task3
{
    private $inputNumber;

    public function __construct($inputNumber)
    {
        $this->inputNumber = $inputNumber;
    }

    public function main()
    {
        try {
            if (!is_int($this->inputNumber)) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            }
            echo $this->test($this->inputNumber);
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }

    private function test(int $inputNumber, int $sum = 0, $amount = 0): int
    {
        for ($i = 0; $i <= strlen($inputNumber);$i++) {
            $amount = $inputNumber % 10;
            $sum = $sum + $amount;
            $inputNumber = $inputNumber / 10;
        }
        if (strlen($sum) > 1) {
            return $this->test($sum);
        } else {
            return $sum;
        }
    }
}

$task1 = new Task3(5223);
$task1->main();
