<?php

/* User connection & authorization settings */
$auth_use_facebook="0"; // Do we need facebook? (enable facebook login?)

/* Build Information file for Desklet */

$system_codename="Skycloud"; // Release codename
$system_version="0.0.1"; // System Version used for system identification
$system_humanreadibleversion="0.1 Alpha"; // Version in the about box
$system_buildversion="127"; // Build Version
$system_servercode="183774773009173784638100937"; // Code for the server
$system_uvid="00001-00011-32100-00127"; // Universal Version IDentifier
$DeskletFusionEnabled="1"; //Enable Desklet Fusion Features

/* Development mode hardswitches. Use this for dev purposes only! */
$system_ispreview="0"; // Is this a preview version? - Will be overridden by Dev Mode
$system_devmodeenabled="1"; // Is this still in development? turn on dev mode! - overrides "preview" version
$system_buildstatus="1"; // Build Code Status (0 nightly, 1 alpha, 2 beta) - will be ignored if dev mode is OFF
$system_debugmodeenabled="0"; // Turn on debug mode for web apps? (not implemented yet)

/* ================================================ */

/*
OS Debug Values. They are used for dev purposes only. 
It is reccommended to turn these features off in production environment. 
*/

$OSDebug_debugmodeenabled="0";

/* 
enable kernel terminal
This option enables the Desklet system to directly communicate with the server's shell (with user's input)
It is recommended to turn it off for production environments, as this may pose security threat.

*/
$OSDebug_enablekernelterminal="0";

/* enable or disable PHP Info window */
$OSDebug_enablephpinfowindow="0";


/* OS Kernel Configs */

/*
enable kernel communication
This option enables Desklet to directly communicate to the server's shell, or terminal.
Note that this option does not enable the "Web Terminal", user does not have the permission to freely type commands.
*/

$OSKernel_enablekernelcomm="1";
?>
