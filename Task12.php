<?php

namespace src;

class Task12
{
    private $firstNum;
    private $secondNum;
    private $result;

    public function __construct($firstNum, $secondNum)
    {
        if (!is_numeric($firstNum) || !is_numeric($secondNum)) {
            throw new \InvalidArgumentException('Exception: non valid arguments');
        }
        $this->firstNum = $firstNum;
        $this->secondNum = $secondNum;
    }
    public function __toString()
    {
        return $this->result;
    }

    public function add(): Task12
    {
        $this->result = $this->firstNum + $this->secondNum;

        return $this;
    }
    public function subtract(): Task12
    {
        $this->result = $this->firstNum - $this->secondNum;

        return $this;
    }
    public function multiply(): Task12
    {
        $this->result = $this->firstNum * $this->secondNum;

        return $this;
    }
    public function divide(): Task12
    {
        if ($this->secondNum === 0) {
            throw new \InvalidArgumentException('Error: Division by zero error');
        }
        $this->result = $this->firstNum / $this->secondNum;

        return $this;
    }

    public function addBy($byNum): Task12
    {
        if ($byNum === null) {
            return $this;
        }
        $this->result += $byNum;

        return $this;
    }

    public function divideBy($byNum): Task12
    {
        if ($byNum === null) {
            return $this;
        }
        if ($byNum === 0) {
            throw new \InvalidArgumentException('Error: Division by zero error');
        }
        $this->result /= $byNum;

        return $this;
    }

    public function multiplyBy($byNum): Task12
    {
        if ($byNum === null) {
            return $this;
        }
        $this->result *= $byNum;

        return $this;
    }

    public function subtractBy($byNum): Task12
    {
        if ($byNum === null) {
            return $this;
        }
        $this->result -= $byNum;

        return $this;
    }
}

$myCalc = new Task12(12, 6);
