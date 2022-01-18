<?php

class MyList
{
public int $size;
public array $elements;

    /**
     * @param int $size
     * @param array $elements
     */
    public function __construct(int $size, array $elements)
    {
        $this->size = $size;
        $this->elements = $elements;
    }

    public function insert($index,$obj)
    {
        $this->elements[$index] = $obj;
    }

    public function add($obj)
    {
        $this->elements[] = $obj;
    }

    public function remove($index)
    {
        $this->elements[$index] = $this->elements;
    }

    public function clear()
    {
        $this->elements[] = "";
    }

    public function addAll($obj)
    {
        $this->elements[] = $this->elements[$obj];
    }

    public function indexOf($obj)
    {

    }

    public function sort()
    {
        return sort($this->elements);
        return $this->elements;
    }

    public function reset(): array
    {
        reset($this->elements);
        return $this->elements;
    }

    public function size()
    {

    }
}