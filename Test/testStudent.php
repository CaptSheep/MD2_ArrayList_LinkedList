<?php

use PHPUnit\Framework\TestCase;
include_once "Student_Manager/Students.php";

class testStudent extends TestCase {
    public function test()
    {
        $array = new Students();
        $array->insertFirst("abc", 4);
        $array->insertFirst("cde", 20);
        $array->insertLast("ghi", 30);
        $array->insertLast("dkl", 40);
        $result = $array->findByName("123");
        $expect = "khong co ten can tim";
        $this->assertEquals($expect,$result);
    }
}