<?php

namespace src;

class Task7
{
    public $arr;
    private $number;

    public function __construct($arr, $number)
    {
        $this->arr = $arr;
        $this->number = $number;
    }

    public function main()
    {
        try {
            if (!is_array($this->arr)) {
                throw new \InvalidArgumentException('Exception: the argument must be array');
            } elseif (!is_int($this->number)) {
                throw new \InvalidArgumentException('Exception: the argument must be int');
            }
            echo('<pre>');
            print_r($this->getArray($this->arr, $this->number));
            echo('</pre>');
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    private function getArray(array $arr, int $position): array
    {
        array_splice($arr, $position, 1);

        return $arr;
    }
}

$myArr = [1, 2, 3, 4, 5];
$obj = new Task7($myArr, 3);
$obj->main();
