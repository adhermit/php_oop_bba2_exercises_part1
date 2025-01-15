<?php

/**
 * INSTRUCTIONS:
 * Write a class named Math.
 * Add static methods add(), subtract(), and multiply().
 * Use these methods to perform mathematical operations on two numbers.
 */
class Math{
    public static function add(float $num1, float $num2){
        return $num1 + $num2;
    }

    public static function substract(float $num1, float $num2){
        return $num1 - $num2;
    }

    public static function multiply(float $num1, float $num2){
        return $num1 * $num2;
    }
}
?>
<h3>Addition: <?=Math::add(2,3);?></h3> 
<h3>Subtraction: <?=Math::substract(10,4);?></h3> 
<h3>Multiplication: <?=Math::multiply(5,6);?></h3>