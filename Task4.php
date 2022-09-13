<?php

namespace src;

class Task4
{
    public function main($input)
    {
        try {
            if (!is_string($input)) {
                throw new \InvalidArgumentException('Exception: the argument must be string');
            }

            return $this->getCapsCase($input);
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    private function getCapsCase(string $input): string
    {
        $separators = [
            ' ',
            '-',
            '_',
        ];
        $result = ucwords($input, ' _-');

        return str_replace($separators, '', $result);
    }
}

$task4 = new Task4();
echo $task4->main('_test_was not-so Interesting_that_funny');
