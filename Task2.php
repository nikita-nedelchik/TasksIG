<?php

namespace src;

class Task2
{
    public function main($needDate)
    {
        if (!is_string($needDate)) {
            throw new \InvalidArgumentException('Exception: the argument must be string');
        }
        if (!strtotime($needDate)) {
            throw new \InvalidArgumentException('Exception: the argument is incorrect');
        }
        $needArr = explode('-', $needDate);
        if (!checkdate($needArr[1], $needArr[0], $needArr[2])) {
            throw new \InvalidArgumentException('Exception: the argument is incorrect');
        }

        return $this->getDate($needDate);
    }
    private function getDate(string $date): int
    {
        $date1 = strtotime(date('d-m-Y'));
        $date2 = strtotime($date);
        if ($date2 < $date1) {
            $year1 = getdate($date1)['year'];
            $year2 = getdate($date2)['year'];
            $diffYears = ($year1 - $year2) + 1;
            $date2 = strtotime(date('d-m-Y', strtotime($date . "+ $diffYears years")));
        }

        $diff = ($date2 - $date1) / 60 / 60 / 24;

        return $diff;
    }
}

$task2 = new Task2();
