<?php

/**
 * Handle fuel events and track them in new relic
 *
 * @package fuel-newrelic
 * @see http://github.com/tarnfeld/fuel-newrelic
 * @author Tom Arnfeld <tarnfeld@me.com>
 */

namespace NewRelic;

class EventHandler
{

	/**
	 * Register for fuel events
	 */
	public static function Register()
	{
		\Event::Register("shutdown", "\NewRelic\EventHandler::EventShutdown");
	}

	/**
	 * Event handler for the "shutdown" event
	 */
	public static function EventShutdown()
	{
		Agent::EndTransaction();
	}
}
