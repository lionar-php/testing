<?php

if ( ! function_exists ( 'dump' ) )
{
	/**
	 * Dump the passed variables.
	 *
	 * @param  dynamic  mixed
	 * @return void
	 */
	function dump ( )
	{
		array_map ( function ( $x ) { var_dump ( $x ); }, func_get_args ( ) );
	}
}

if ( ! function_exists( 'dd' ) )
{
	/**
	 * Dump the passed variables and end the script.
	 *
	 * @param  dynamic  mixed
	 * @return void
	 */
	function dd ( )
	{
		array_map ( function ( $x ) { var_dump ( $x ); }, func_get_args ( ) ); die;
	}
}