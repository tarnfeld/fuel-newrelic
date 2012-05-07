<?php

/**
 * Bootstrap file for fuel-newrelic
 *
 * @package fuel-newrelic
 * @see http://github.com/tarnfeld/fuel-newrelic
 * @author Tom Arnfeld <tarnfeld@me.com>
 */

Autoloader::add_classes(array(
	
	'NewRelic\\Agent'			=> __DIR__ . '/classes/agent.php',
	'NewRelic\\EventHandler'	=> __DIR__ . '/classes/eventhandler.php',
	'NewRelic\\Helper'			=> __DIR__ . '/classes/helper.php'
));

\NewRelic\EventHandler::Register();
