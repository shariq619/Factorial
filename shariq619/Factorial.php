<?php

namespace shariq619;

/*
A simple factorial function
*/
class Factorial {
	
	public function __construct(){
		echo 'Simple Factorial Function'.'<br/>';
	}
	
	public function getFactorial($number){
        if($number==0){
			return '1';
		}
		return ($number * $this->getFactorial($number-1));
    }
	
}