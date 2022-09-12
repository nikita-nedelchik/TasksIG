<?php

namespace src;

class Task6
{
    private $year;
    private $lastYear;
    private $month;
    private $lastMonth;
    private $day;

    public function __construct($year, $lastYear, $month, $lastMonth)
    {
        $this->year = $year;
        $this->lastYear = $lastYear;
        $this->month = $month;
        $this->lastMonth = $lastMonth;
    }

    public function main()
    {
        try {
            if (!is_int($this->year) || !is_int($this->lastYear) || !is_int($this->month) || !is_int($this->lastMonth)) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            }
            echo $this->checkMondays($this->year, $this->lastYear, $this->month, $this->lastMonth);
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    private function checkMondays(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $count = 0;
        while ($lastYear <= $year) {
            $endMonth = 12;
            if ($lastYear == $year) {
                $endMonth = $month;
            }
            while ($lastMonth <= $endMonth) {
                $result = date('w', mktime(0, 0, 0, date($lastMonth), date('1'), date($lastYear)));
                if ($result == 1) {
                    $count++;
                }
                $lastMonth++;
                if ($lastMonth > 12) {
                    $lastMonth = 1;
                    $lastYear++;

                    break;
                }
            }
        }

        return $count;
    }
}

$obj = new Task6(2022, 2022, 12, 1);
$obj->main();
