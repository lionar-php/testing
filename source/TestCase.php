<?php

namespace Testing;
	
use Mockery;
use	PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    	public function tearDown()
    	{
    		parent::tearDown();
    		Mockery::close();
    	}

    	public function nonStringValues( )
    	{
	        return array(
	            	array( 0 ),
	            	array( 0.1 ),
	            	array( false ),
	            	array( true ),
	            	array( null ),
	            	array( array( ) ),
	        );
	}
}
