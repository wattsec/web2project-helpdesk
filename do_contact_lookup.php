<?php
if (!defined('W2P_BASE_DIR')) {
	die('You should not access this file directly');
}

/*
 * This is a horrible ugly hack.. we need to rethink how we do contact lookups, etc.
 *
 */

$contact_id = (int) w2PgetParam( $_POST, 'contact_id', 0 );

$helpdesk = new CHelpDesk();
echo $helpdesk->lookup_contact($AppUI, $contact_id);
die();