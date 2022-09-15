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
        if ($this->secondNum === 0) {
            throw new \InvalidArgumentException('Error: Division by zero error');
        }
        $this->result = $this->firstNum / $this->secondNum;

        return $this;
    }

    public function addBy($byNum)
    {
		if ($byNum === null) {
			return $this;
		}
        $this->result += $byNum;

		return $this;
    }

    public function divideBy($byNum)
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

    public function multiplyBy($byNum)
    {
		if ($byNum === null) {
			return $this;
		}
        $this->result *= $byNum;

		return $this;
    }

    public function subtractBy($byNum)
    {
		if ($byNum === null) {
			return $this;
		}
        $this->result -= $byNum;

		return $this;
    }
}

$myCalc = new Task12(12, 6);
