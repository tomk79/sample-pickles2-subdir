<?php
/**
 * test for Pickles 2
 */
class mainTest extends PHPUnit\Framework\TestCase{
	private $fs;

	public function setUp() : void{
		mb_internal_encoding('UTF-8');
	}


	/**
	 * Test
	 */
	public function testStandard(){
		$this->assertEquals( 1, 1 );
	}

}
