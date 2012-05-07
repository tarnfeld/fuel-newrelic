<?php

/**
 * Various helper functions to track data via the new relic agent
 *
 * @package fuel-newrelic
 * @see http://github.com/tarnfeld/fuel-newrelic
 * @author Tom Arnfeld <tarnfeld@me.com>
 */

namespace NewRelic;

class Helper
{
	/**
	 * Set the new relic transaction from a fuel request
	 * It's handy to call this in your index.php file to help new relic track requests properly
	 *
	 * @param Request $request
	 */
	public static function SetTransactionFromRequest(\Request $request)
	{
		if ($route = $request->route)
		{
			$segments = $route->segments;

			$path = "/" . implode("/", $segments);
			if ($path)
			{
				Agent::NameTransaction($path);
			}
		}
	}
}
