<?php

namespace src;

class Task6
{
    public function main($year, $lastYear, $month, $lastMonth)
    {
        try {
            if (!is_int($year) || !is_int($lastYear) || !is_int($month) || !is_int($lastMonth)) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            }
            if (checkdate($month, 1, $year) && checkdate($lastMonth, 1, $lastYear)) {
                return $this->checkMondays($year, $lastYear, $month, $lastMonth);
            }
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
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
echo $obj->main(1980, 2021, 5, 10);
