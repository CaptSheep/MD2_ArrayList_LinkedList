<?php

class Students
{
    public $name;
    public $score;
    public array $array;

    /**
     * @param $name
     * @param $score
     */
    public function __construct()
    {
        $this->array = [];
    }

    public function insertFirst($name, $score)
    {
        $list = [
            "name" => $name,
            "score" => $score,
        ];

        array_unshift($this->array, $list);
    }

    public function insertLast($name, $score)
    {
        $list = [
            "name" => $name,
            "score" => $score,
        ];

        $this->array[] = $list;

    }

    public function showList(): array
    {
        return $this->array;
    }

    public function totalStudentFail()
    {
        foreach ($this->array as $value){
            if ($value["score"] <= 5){
                return $value;
            }
        }

    }

    public function listStudentMaxScore()
    {
        $max = $this->array[0];
        foreach ($this->array as $value){
            if($value["score"] > $max["score"]){
                $max = $value;
            }
        }
        return $max;
    }

    public function findByName($name)
    {
        foreach ($this->array as $value){
            if ($value["name"] == $name){
                return $value;
            }
            else{
                return "khong co ten can tim";
            }
        }
    }


}

$array = new Students();
$array->insertFirst("abc", 4);
$array->insertFirst("cde", 20);
$array->insertLast("ghi", 30);
$array->insertLast("dkl", 40);
echo "<pre>";
print_r($array->findByName("123"));
