<?php
/**
 * Helper utilities for Event Tickets.
 *
 * @package Event_Tickets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function event_tickets_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
