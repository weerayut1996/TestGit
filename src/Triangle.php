<?php namespace Triangle;

class Triangle{
    private $A,$B,$C;

    public function __construct(int $A,int $B,int $C){
        $this->A = $A;
        $this->B = $B;
        $this->C = $C;
    }
  public function getType(): array{ 
        $answer = array('path' => array(),'answer'=> 'out of range' );
        $isOutOfRange = false;
        
        if($this->C < 1 || $this-> C > 200) {
            $answer['answer'] = 'c '.$answer['answer'];
            $isOutOfRange = true;
        }
        if($this->B < 1 || $this->B > 200) {
            $answer['answer'] = 'b '.$answer['answer'];
            $isOutOfRange = true;            
        }
        if($this->A < 1 || $this->A > 200) {
            $answer['answer'] = 'a '.$answer['answer'];
            $isOutOfRange = true;   
        }
        if(!$isOutOfRange) {
            if(($this->A + $this->B <= $this->C) || ($this->B + $this->C <= $this->A) || ($this->A + $this->C <= $this->B)) {
                $answer['answer'] = 'not triangle';            
            } 
            else {
                
                if($this->A == $this->B && $this->A == $this->C && $this->B == $this->C) {
                    $answer['answer'] = 'Equilateral';
                } else {
                    
                    if($this->A == $this->B || $this->B == $this->C || $this->A == $this->C ) {
                        $answer['answer'] = 'Isosceles';
                    } else {
                        $answer['answer'] = 'Scalene';
                    }
                }
            }
        }
        return $answer;
    }
}