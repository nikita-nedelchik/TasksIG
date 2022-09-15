<?php

namespace src;

class Task6
{
    public function main($year, $lastYear, $month, $lastMonth)
    {
        if (!is_int($year) || !is_int($lastYear) || !is_int($month) || !is_int($lastMonth)) {
            throw new \InvalidArgumentException('Exception: the argument must be int');
        }
        if (!checkdate($month, 1, $year) || !checkdate($lastMonth, 1, $lastYear)) {
            throw new \InvalidArgumentException('Exception: the argument has incorrect date');
        }

        return $this->checkMondays($year, $lastYear, $month, $lastMonth);
    }
    private function checkMondays(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $count = 0;
        while ($month <= 12) {
            $result = date('w', mktime(0, 0, 0, date($month), date(1), date($year)));
            $month++;
            if ($result == 1) {
                $count++;
            }
            if ($month == $lastMonth && $year == $lastYear) {
                break;
            }
            if ($month > 12) {
                $month = 1;
                $year++;
            }
        }

        return $count;
    }
}

$obj = new Task6();
