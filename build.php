<?php

/* Build Information file for Desklet */

$system_codename="Skycloud"; // Release codename
$system_version="0.0.1"; // System Version used for system identification
$system_humanreadibleversion="0.1 Alpha"; // Version in the about box
$system_buildversion="127"; // Build Version
$system_servercode="183774773009173784638100937"; // Code for the server
$system_uvid="00001-00011-32100-00127"; // Universal Version IDentifier
$DeskletFusionEnabled="1"; //Enable Desklet Fusion Features

/* Development mode hardswitches. Use this for dev purposes only! */
$system_devmodeenabled="1"; // Is this still in development? turn on dev mode!
$system_buildstatus="1"; // Build Code Status (0 nightly, 1 alpha, 2 beta, 3 preview, 4 release)
$system_debugmodeenabled="0"; // Turn on debug mode for web apps? (not implemented yet)

/* ================================================ */

/*
OS Debug Values. They are used for dev purposes only. 
It is reccommended to turn these features off in production environment. 
*/

$OSDebug_debugmodeenabled="0";

/* 
enable kernel terminal
This option enables the Desklet system to directly communicate with the server's shell.
It is recommended to turn it off for production environments, as this may pose security threat.

Note that the code for this part may be detected as a virus, but it's not. It's just a PHP Shell, with login and security.

*/
$OSDebug_enablekernelterminal="0";

/* enable or disable PHP Info window */
$OSDebug_enablephpinfowindow="0";


?>
