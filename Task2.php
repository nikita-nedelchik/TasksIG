<?php

namespace src;

class Task2
{
    public function main($needDate)
    {
        try {
            if (!is_string($needDate)) {
                throw new \InvalidArgumentException('Exception: the argument must be string');
            }
            if (strtotime($needDate) && strtotime($needDate) >= strtotime(date('d-m-Y'))) {
                return $this->getDate($needDate);
            }
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    private function getDate(string $date): int
    {
        $res = strtotime($date) - strtotime(date('d-m-Y'));
        $res = floor($res / (60 * 60 * 24));

        return $res;
    }
}

$task2 = new Task2();
echo $task2->main('17-09-2022');
