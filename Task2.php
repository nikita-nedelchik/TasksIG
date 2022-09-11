<?php

namespace src;

class Task2
{
    private $needDate;
    public function __construct($date)
    {
        $this->needDate = $date;
    }

    public function main()
    {
        try {
            if (!is_string($this->needDate)) {
                throw new \InvalidArgumentException('Exception: the argument must be string');
            }
            if (strtotime($this->needDate) > time()) {
                echo $this->getDate($this->needDate);
            }
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    private function getDate(string $date): int
    {
        $today = time();
        $res = strtotime($date) - $today;
        $res = floor($res / (60 * 60 * 24));

        return $res;
    }
}

$da = new Task2('15-09-2022');
$da->main();
