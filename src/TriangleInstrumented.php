<?php namespace Triangle;

class TriangleInstrumented{
    private $A,$B,$C;

    public function __construct(int $A,int $B,int $C){
        $this->A = $A;        $this->B = $B;        $this->C = $C;
    }

    public function getType(): array{ 
        $answer = array('path' => array(),'answer'=> 'out of range' );
        $isOutOfRange = false;
        array_push($answer['path'], 'A');

        array_push($answer['path'], 'B');
        if($this->C < 1 || $this-> C > 200) {
            $answer['answer'] = 'c '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'], 'C');
        }

        array_push($answer['path'], 'D');
        if($this->B < 1 || $this->B > 200) {
            $answer['answer'] = 'b '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'], 'E');
        }

        array_push($answer['path'], 'F');
        if($this->A < 1 || $this->A > 200) {
            $answer['answer'] = 'a '.$answer['answer'];
            $isOutOfRange = true;
            array_push($answer['path'], 'G');
        }

        array_push($answer['path'], 'H');
        if(!$isOutOfRange) {

            array_push($answer['path'], 'I');
            if(($this->A + $this->B <= $this->C) || ($this->B + $this->C <= $this->A) || ($this->A + $this->C <= $this->B)) {
                $answer['answer'] = 'not triangle';
                array_push($answer['path'], 'J');
            } 
            else {
                array_push($answer['path'], 'K');
                if($this->A == $this->B && $this->A == $this->C && $this->B == $this->C) {
                    $answer['answer'] = 'Equilateral';
                    array_push($answer['path'], 'L');
                } else {
                    array_push($answer['path'], 'M');
                    if($this->A == $this->B || $this->B == $this->C || $this->A == $this->C ) {
                        $answer['answer'] = 'Isosceles';
                        array_push($answer['path'], 'N');
                    } else {
                        array_push($answer['path'], 'O');
                        $answer['answer'] = 'Scalene';
                    }
                }
            }
        }

        array_push($answer['path'], 'P');
        return $answer;
    }

}