<?php

require_once '../Loader.php';

/**
 * Test class for ANN_Maths.
 * Generated by PHPUnit on 2011-05-25 at 11:28:09.
 */
class MathsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var ANN_Maths
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement testSigmoid().
     */
    public function testSigmoid()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testThreshold().
     */
    public function testThreshold()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    public function testRandomDelta()
    {
			$floatRandom = ANN_Maths::randomDelta();
			
			$this->assertLessThan(1, $floatRandom);
			
			$this->assertGreaterThan(-1, $floatRandom);
			    }

    public function testRandomWeight()
    {
			$floatRandom = ANN_Maths::randomWeight();
			
			$this->assertLessThanOrEqual(2, $floatRandom);
			
			$this->assertGreaterThanOrEqual(-2, $floatRandom);
    }
}