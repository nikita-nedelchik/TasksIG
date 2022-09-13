<?php

namespace src;

class Task1
{
    public function main($inputNumber)
    {
        try {
            if (!is_int($inputNumber)) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            }

            return $this->test($inputNumber);
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }

    private function test(int $inputNumber): string
    {
        $mess = $inputNumber > 30 ? 'More than 30'
            : ($inputNumber > 20 ? 'More than 20'
                : ($inputNumber > 10 ? 'More than 10'
                    : ($inputNumber <= 10 ? 'Equal or less than 10' : '')));

        return $mess;
    }
}

$task1 = new Task1();
$task1->main(-10);
