<?php

namespace src;

class Task3
{
    public function main($inputNumber)
    {
        try {
            if (!is_int($inputNumber) && $inputNumber > 0) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            }

            return $this->test($inputNumber);
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
echo $task1->main(1);
