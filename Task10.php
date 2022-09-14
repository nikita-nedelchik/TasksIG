<?php

namespace src;

class Task10
{
    public function main($number)
    {
        try {
            if (!is_int($number)) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            } elseif ($number <= 0) {
                throw new \InvalidArgumentException('Exception: the argument must be positive');
            }

            return $this->collatz($number);
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    private function collatz(int $number, array $result = []): array
    {
        $result[] = $number;
        if ($number === 1) {
            return $result;
        }
        if ($number % 2 === 0) {
            $number = $number / 2;

            return $this->collatz($number, $result);
        } else {
            $number = (3 * $number) + 1;

            return $this->collatz($number, $result);
        }
    }
}

$obj = new Task10();
