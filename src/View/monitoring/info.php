<?php
/*
 * Copyright (C) 2004-2018 Soner Tari
 *
 * This file is part of UTMFW.
 *
 * UTMFW is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * UTMFW is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with UTMFW.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('include.php');

$View->Model= 'symon';
$View->ProcessStartStopRequests();
$View->Model= 'symux';
$View->ProcessStartStopRequests();
$View->Model= 'pmacct';
$View->ProcessStartStopRequests();

$Reload= TRUE;
require_once($VIEW_PATH.'/header.php');
		
$View->Model= 'symon';
$View->PrintStatusForm();
$View->Model= 'symux';
$View->Caption= 'Symux';
$View->PrintStatusForm();
$View->Model= 'pmacct';
$View->Caption= 'Pmacct';
$View->PrintStatusForm();

PrintHelpWindow(_HELPWINDOW('Graphs on this web user interface are generated by these monitoring processes. Settings of these software are handled by automatic configuration.'));
require_once($VIEW_PATH.'/footer.php');
?>
