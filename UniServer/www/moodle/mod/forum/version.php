<?php // $Id$

////////////////////////////////////////////////////////////////////////////////
//  Code fragment to define the module version etc.
//  This fragment is called by /admin/index.php
////////////////////////////////////////////////////////////////////////////////

$module = new stdClass(); // instantiate $module explicitely

$module->version  = 2007101512;
$module->requires = 2007101509;  // Requires this Moodle version
$module->cron     = 60;

?>
