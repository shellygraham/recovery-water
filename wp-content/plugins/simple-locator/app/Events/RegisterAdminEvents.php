<?php 

namespace SimpleLocator\Events;

use SimpleLocator\Listeners\GetMetaFieldsForPostType;
use SimpleLocator\Listeners\ResetPostTypeSettings;

/**
* Register Admin Events
*/
class RegisterAdminEvents 
{

	public function __construct()
	{
		// Admin Settings Post Type Select
		add_action( 'wp_ajax_wpslposttype', array($this, 'PostTypeMetaRequested' ));
		add_action( 'wp_ajax_wpslresetposttype', array($this, 'PostTypeResetRequested' ));
	}

	/**
	* Meta Fields for a Specific Post Type were Requested
	*/
	public function PostTypeMetaRequested()
	{
		new GetMetaFieldsForPostType;
	}

	/**
	* Reset Post Type to Default
	*/
	public function PostTypeResetRequested()
	{
		new ResetPostTypeSettings;
	}

}