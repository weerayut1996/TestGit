<?php

use PHPUnit\Framework\TestCase;

use Triangle\TriangleInstrumented;

class TriangleInstrumentedTest extends TestCase {

    public function testCanPerformUnitTest(): void{
        $this->assertTrue(true);
    }

    public function testIsOutOfRange() {
        $t = new TriangleInstrumented(-300,500,-5);
        $this->assertEquals("a b c out of range",$t->getType()['answer']);
        $path = array('A','B','C','D','E','F','G','H','P');
        $this->assertEquals($path,$t->getType()['path']);
    }

    public function testIsNotTriangle() {
        $t = new TriangleInstrumented(1,5,10);
        $this->assertEquals("not triangle",$t->getType()['answer']);
        $path = array('A','B','D','F','H','I','J','P');
        $this->assertEquals($path,$t->getType()['path']);
    }

    public function testIsEquilateral() {
        $t = new TriangleInstrumented(10,10,10);
        $this->assertEquals("Equilateral",$t->getType()['answer']);
        $path = array('A','B','D','F','H','I','K','L','P');
        $this->assertEquals($path,$t->getType()['path']);
    }

    public function testIsIsosceles() {
        $t = new TriangleInstrumented(10,10,1);
        $this->assertEquals("Isosceles",$t->getType()['answer']);
        $path = array('A','B','D','F','H','I','K','M','N','P');
        $this->assertEquals($path,$t->getType()['path']);
    }

    public function testIsScalene() {
        $t = new TriangleInstrumented(100,150,200);
        $this->assertEquals("Scalene",$t->getType()['answer']);
        $path = array('A','B','D','F','H','I','K','M','O','P');
        $this->assertEquals($path,$t->getType()['path']);
    }
}