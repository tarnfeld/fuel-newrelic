<?php

/**
 * Agent class wrapper around the new relic agent functions...
 * 
 * The functions below are only defined with the required number
 * of arguments, all arguments will be passed through directly
 * to the agent function.
 *
 * @package fuel-newrelic
 * @see http://github.com/tarnfeld/fuel-newrelic
 * @author Tom Arnfeld <tarnfeld@me.com>
 */

namespace NewRelic;

class Agent
{

	/**
	 * Is the new relic agent installed?
	 * 
	 * @return boolean
	 */
	public static function Installed()
	{
		return extension_loaded('newrelic');
	}

	/**
	 * Set the app name for the current transaction
	 *
	 * @param string $name
	 * @return boolean
	 */
	public static function SetApp($name)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_set_appname", func_get_args());
		}

		return false;
	}

	/**
	 * Notice an error
	 *
	 * @param mixed $message
	 * @return boolean
	 */
	public static function Error($message)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_notice_error", func_get_args());
		}

		return false;
	}

	/**
	 * Name the current transaction
	 *
	 * @param string $name
	 * @return boolean
	 */
	public static function NameTransaction($name)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_name_transaction", func_get_args());
		}

		return false;
	}

	/**
	 * End the current transaction
	 *
	 * @return boolean
	 */
	public static function EndTransaction()
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_end_of_transaction", func_get_args());
		}

		return false;
	}

	/**
	 * Ignore the current transaction
	 *
	 * @return boolean
	 */
	public static function IgnoreTransaction()
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_ignore_transaction", func_get_args());
		}

		return false;
	}

	/**
	 * Do not generate an apdex value for this transaction
	 *
	 * @return boolean
	 */
	public static function IgnoreApdex()
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_ignore_apdex", func_get_args());
		}

		return false;
	}

	/**
	 * Mark the current transaction as a background job
	 *
	 * @param boolean $is_bg
	 * @return boolean
	 */
	public static function BackgroundJob($is_bg = true)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_background_job", func_get_args());
		}

		return false;
	}

	/**
	 * Enable capturing query params from the URL in this transaction
	 *
	 * @param string $enable
	 * @return boolean
	 */
	public static function CaptureParams($enable = "on")
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_capture_params", func_get_args());
		}

		return false;
	}

	/**
	 * Track a custom metric for this transaction
	 *
	 * @param string $name
	 * @param string $value
	 * @return boolean
	 */
	public static function CustomParameter($name, $value)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_add_custom_parameter", func_get_args());
		}

		return false;
	}

	/**
	 * Track a custom parameter for this transaction
	 *
	 * @param string $name
	 * @param double $value
	 * @return boolean
	 */
	public static function CustomMetric($name, $value)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_custom_metric", func_get_args());
		}

		return false;
	}

	/**
	 * Add functions / object methods to the list to be instrumented
	 * Acceptable values:
	 *   - "my_function"
	 *   - "MyClass::MyMethod"
	 *
	 * @param string $signature
	 * @return boolean
	 */
	public static function CustomTracer($signature)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_add_custom_tracer", func_get_args());
		}

		return false;
	}

	/**
	 * Get the browser timing javascript that would be inserted into the header of the output
	 * 
	 * @param boolean $tags Whether or not to include wrapping <script> tags
	 * @return boolean
	 */
	public static function BrowserTimingHeader($tags = true)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_get_browser_timing_header", func_get_args());
		}

		return false;
	}

	/**
	 * Get the browser timing javascript that would be inserted into the footer of the output
	 * 
	 * @param boolean $tags Whether or not to include wrapping <script> tags
	 * @return boolean
	 */
	public static function BrowserTimingFooter($tags = true)
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_get_browser_timing_footer", func_get_args());
		}

		return false;
	}

	/**
	 * Disable the automatic rum code (Real User Monitoring)
	 *
	 * @return boolean
	 */
	public static function DisableRUM()
	{
		if (static::Installed())
		{
			return call_user_func_array("newrelic_disable_autorum", func_get_args());
		}

		return false;
	}
}
