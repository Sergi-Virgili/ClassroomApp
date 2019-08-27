<?php

use app\Kata;

use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{

  public function testReturnANumberIfNotHaveAnyCoincidence()
  {
    $kata = new Kata();
    $response = $kata->returnValue(1);

    $this->assertIsInt($response);
  }

  public function testReturnTheSameNumberIfNotHaveCoincidence(){
        $number = 4;
      $kata = new Kata();
      $response = $kata->returnValue($number);

      $this->assertEquals($number,$response);
  }

  public function testReturnFizzIfNumberIsDivisibleBy3(){
      $kata = new Kata();
      $response = $kata->returnValue(3);

      $this->assertEquals('Fizz',$response);
  }

  public function testResturnBuzzIfNumberIsDivisibleBy5(){
      $kata = new Kata();
      $response = $kata->returnValue(5);

      $this->assertEquals('Buzz',$response);
  }

  public function testReturnFizzBuzzIfNumberIsDivisibleBy3And5(){
    $kata = new Kata();
    $response = $kata->returnValue(15);
    $this->assertEquals('FizzBuzz', $response);
  }

  public function testReturnArrayFisrtNumber1(){
    $kata = new Kata();
    $responseArray = $kata->returnArray();
    $response = $responseArray[0];
    $this->assertEquals(1, $response);
  }

  public function testReturnArrayLast100NumberEqualBuzz(){
    $kata = new Kata();
    $responseArray = $kata->returnArray();
    $response = $responseArray[99];
    $this->assertEquals('Buzz', $response);
  }

}
