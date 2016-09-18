<?php

namespace Testing;
	
use Mockery;
use	PHPUnit_Framework_TestCase;
use ReflectionClass;

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

		public function property ( $instance, $property )
		{
			$reflector = new ReflectionClass ( $instance );
	        $property = $reflector->getProperty ( $property );
	        $property->setAccessible ( true );

	        return $property->getValue ( $instance );
		}
}
