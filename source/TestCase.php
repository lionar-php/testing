<?php

namespace Testing;
	
use Mockery;
use	PHPUnit\Framework\TestCase as BaseTestCase;
use ReflectionClass;

class TestCase extends BaseTestCase
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

		public function nonArrayValues( )
    	{
	        return array(
	            	array( 0 ),
	            	array( 0.1 ),
	            	array( false ),
	            	array( true ),
	            	array( null ),
	            	array( 'some string' ),
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
