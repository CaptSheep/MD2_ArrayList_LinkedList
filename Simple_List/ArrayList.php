<?php

class ArrayList
{
    public array $array;

    public function __construct($array = "")
    {
        if (is_array($array)) {
            $this->array = $array;
        } else {
            $this->array = [];
        }
    }

    public function add($obj)
    {
       $this->array[] = $obj;
    }

    public function isInteger($match)
    {
        return preg_match('/^[0-9]$/', $match); // pattern chi nhan cac gia tri so tu 0-9 va kiem tra du lieu dau vao $match co khop voi chuoi  Regular Expression ( pattern ) hay khong
    }

    public function size(): int
    {
        return count($this->array);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->array[$index];
        } else {
            die ("ERROR in ArrayList");
        }
    }

}