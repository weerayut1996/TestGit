<?php

use PHPUnit\Framework\TestCase;

use Triangle\Triangle;

class TriangleTest extends TestCase {

    public function testCanPerformUnitTest(): void{
        $this->assertTrue(true);
    }

    public function testIsOutOfRange() {
        $t = new Triangle(-300,500,-5);
        $this->assertEquals("a b c out of range",$t->getType()['answer']);
    }

    public function testIsNotTriangle() {
        $t = new Triangle(1,5,10);
        $this->assertEquals("not triangle",$t->getType()['answer']);
    }

    public function testIsEquilateral() {
        $t = new Triangle(10,10,10);
        $this->assertEquals("Equilateral",$t->getType()['answer']);
    }

    public function testIsIsosceles() {
        $t = new Triangle(10,10,1);
        $this->assertEquals("Isosceles",$t->getType()['answer']);
    }

    public function testIsScalene() {
        $t = new Triangle(100,150,200);
        $this->assertEquals("Scalene",$t->getType()['answer']);
    }

    /*public function testIsScalene() {
        $t = new Triangle(3,4,5);
        $this->assertEquals("Scalene",$t->getType()['answer']);
    }*/

    /*public function testIsScalene(): void{
        $t = new Triangle(3,4,5);
        //$this->assertEquals(Expected Output,Actual Output)
        $this->assertEquals("Scalene",$t->getType()['answer']);
    }*/


}