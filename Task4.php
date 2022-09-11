<?php

namespace src;

class Task4
{
    private $input;

    public function __construct($input)
    {
        $this->input = $input;
    }

    public function main()
    {
        try {
            if (!is_string($this->input)) {
                throw new \InvalidArgumentException('Exception: the argument must be string');
            }
            echo $this->getCapsCase($this->input);
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

$da = new Task4('The quick-brown_fox jumps over the_lazy-dog');
$da->main();
