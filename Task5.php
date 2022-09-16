<?php

namespace src;

class Task5
{
    public function main(int $n): string
    {
        if (!is_int($n)) {
            throw new \InvalidArgumentException('invalid argument');
        }
        if ($n <= 0) {
            throw new \InvalidArgumentException('invalid argument');
        }
		$first = '0';
		$second = '1';
		$fibNum = '';
		while (strlen($fibNum) < $n) {
			$fibNum = '';
			$isMoreTen = false;
			$second = strrev($second);
			$first = strrev($first);
			for ($i = 0; $i < strlen($second); $i++) {
				$tempVar = @(int)$first[$i] + @(int)$second[$i];
				if ($isMoreTen) {
					$tempVar++;
				}
				if ($tempVar >= 10) {
					$isMoreTen = true;
					$fibNum .= $tempVar % 10;
				} else {
					$isMoreTen = false;
					$fibNum .= $tempVar;
				}
			}
			if ($isMoreTen) {
				$fibNum .= 1;
			}
			$fibNum = strrev($fibNum);
			$second = strrev($second);
			$first = $second;
			$second = $fibNum;
		}

		return $fibNum;
    }
}

$task5 = new Task5();
echo $task5->main(187);
