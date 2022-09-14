<?php

namespace src;

class Task8
{
    public function main($json)
    {
        try {
            if (!is_string($json)) {
                throw new \InvalidArgumentException('Exception: the argument must be string');
            }
            if ($this->isJson($json)) {
                return $this->getStr($json);
            }
        } catch (\InvalidArgumentException $e) {
            echo $e->getMessage();
        }
    }
    private function isJson($string)
    {
        return is_string($string) &&
            (is_object(json_decode($string)) ||
                is_array(json_decode($string)));
    }
    private function getStr(string $json): string
    {
        $string = '';
        $arr = json_decode($json, true);
        array_walk_recursive($arr, function ($value, $key) use (&$string) {
            $string .= "$key : $value \r\n";
        });

        return $string;
    }
}

$myJson = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';
$obj = new Task8();
echo $obj->main($myJson);
