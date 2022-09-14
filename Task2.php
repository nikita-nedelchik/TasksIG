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
        $date1 = new \DateTime(date('d-m-Y'));
        $date2 = new \DateTime($date);
        $interval = $date1->diff($date2);

        return (int)($interval->days);
    }
}

$task2 = new Task2();
echo $task2->main('0-0-0');
