<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use PinGenerator\PinGeneratorHandler;

class PinGeneratorTest extends TestCase
{
    /**
     * Testing the correct pin generator instance is created
     *
     * @return void
     */
    public function test_pin_generator_instance()
    {
        $instance = new PinGeneratorHandler();
        $this->assertInstanceOf(PinGeneratorHandler::class,$instance);
    }

    /**
     * Testing the palindrome function detects palindromes
     *
     * @return void
     */
    public function test_palindrome_detector_function_works_correctly()
    {
        $instance = new PinGeneratorHandler();
        $palindrome = 1221;
        $this->assertTrue($instance->checkPalindrome($palindrome));
    }

    /**
     * Testing the palindrome function detects palindromes
     *
     * @return void
     */
    public function test_palindrome_detector_function_works_correctly_false_case()
    {
        $instance = new PinGeneratorHandler();
        $nonPalindrome = 18761;
        $this->assertFalse($instance->checkPalindrome($nonPalindrome));
    }

    /**
     * Testing the repetition detector
     *
     * @return void
     */
    public function test_repetition_detector_function_works()
    {
        $instance = new PinGeneratorHandler();
        $repeat = 2233;
        $this->assertTrue($instance->checkRepeating($repeat));
    }

    /**
     * Testing the repetition detector
     *
     * @return void
     */
    public function test_repetition_detector_function_work_false_case()
    {
        $instance = new PinGeneratorHandler();
        $nonRepeating = 1048;
        $this->assertFalse($instance->checkRepeating($nonRepeating));
    }

    /**
     * Testing the sequential number detector
     *
     * @return void
     */
    public function test_sequential_numbers_detector()
    {
        $instance = new PinGeneratorHandler();
        $sequential = 1234;
        $this->assertTrue($instance->checkSequential($sequential));
    }

    /**
     * Testing the sequential number detector
     *
     * @return void
     */
    public function test_sequential_numbers_detector_in_false_case()
    {
        $instance = new PinGeneratorHandler();
        $nonSequential = 1015;
        $this->assertFalse($instance->checkSequential($nonSequential));
    }

    /**
     * Testing increament function
     *
     * @return void
     */
    public function test_increament_function_palindrome()
    {
        $instance = new PinGeneratorHandler();
        $palindrome = 1221;
        $this->assertEquals(0, $instance->increament($palindrome));
    }

    /**
     * Testing increament function
     *
     * @return void
     */
    public function test_increament_function_repetitive_numbers()
    {
        $instance = new PinGeneratorHandler();
        $repetitive = 2255;
        $this->assertEquals(0, $instance->increament($repetitive));
    }

    /**
     * Testing increament function
     *
     * @return void
     */
    public function test_increament_function_sequential_numbers()
    {
        $instance = new PinGeneratorHandler();
        $sequential = 1234;
        $this->assertEquals(0, $instance->increament($sequential));
    }
}
