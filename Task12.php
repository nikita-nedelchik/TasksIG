<?php

namespace src;

class Task12
{
    private $firstNum;
    private $secondNum;
    private $result;

    public function __construct($firstNum, $secondNum)
    {
        try {
            if (!is_numeric($firstNum) || !is_numeric($secondNum)) {
                throw new \InvalidArgumentException('Exception: non valid arguments');
            }
            $this->firstNum = $firstNum;
            $this->secondNum = $secondNum;
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    public function __toString()
    {
        return $this->result;
    }

    public function add()
    {
        $this->result = $this->firstNum + $this->secondNum;

        return $this;
    }
    public function subtract()
    {
        $this->result = $this->firstNum - $this->secondNum;

        return $this;
    }
    public function multiply()
    {
        $this->result = $this->firstNum * $this->secondNum;

        return $this;
    }
    public function divide()
    {
        try {
            if ($this->secondNum === 0) {
                throw new \DivisionByZeroError('Error: Division by zero error');
            }
            $this->result = $this->firstNum / $this->secondNum;

            return $this;
        } catch (\DivisionByZeroError $e) {
            echo $e->getMessage();
        }
    }

    public function addBy($byNum)
    {
        $this->result += $byNum;

        return $this->result;
    }

    public function divideBy($byNum)
    {
        try {
            if ($byNum === 0) {
                throw new \DivisionByZeroError('Error: Division by zero error');
            }
            $this->result /= $byNum;

            return $this->result;
        } catch (\DivisionByZeroError $e) {
            echo $e->getMessage();
        }
    }

    public function multiplyBy($byNum)
    {
        $this->result *= $byNum;

        return $this->result;
    }

    public function subtractBy($byNum)
    {
        $this->result -= $byNum;

        return $this->result;
    }
}

$myCalc = new Task12(12, 6);
