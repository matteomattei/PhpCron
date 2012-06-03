<?php
//============================================================+
// File name   : runner.php
// Version     : 1.0
// Begin       : 2012-05-28
// Last Update : 2012-06-03
// Author      : Matteo Mattei <matteo.mattei@gmail.com>
// License     : GNU-LGPLv3
// -------------------------------------------------------------------
// Copyright (C) 2012 Matteo Mattei - MatteoMattei.com
//
// This file is part of PHP_CRON software library.
//
// PHP_CRON is free software: you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// PHP_CRON is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the License
// along with PHP_CRON.
//
// See LICENSE.TXT file for more information.
// -------------------------------------------------------------------


$php_interpreter = '/usr/bin/php';
$cron_script = dirname(__FILE__).'/php_cron.php';
$outputfile = dirname(__FILE__).'/logs/cronoutput.txt';
$pidfile = dirname(__FILE__).'/logs/cronpid.txt';

function isRunning($pid,$cmd)
{
	exec('ps '.$pid, $output, $result);
	if($result == 0 && count($output) >= 2)
	{
		foreach($output as $k=>$v)
		{
			if(preg_match('/cron\.php$/',$v))
				return TRUE;
		}
	}
	return FALSE;
}

if(!file_exists($pidfile)) file_put_contents($pidfile,'0');
$pid = trim(file_get_contents($pidfile));
if(!isRunning($pid,$cron_script))
{
	exec(sprintf("%s %s > %s 2>&1 & echo $! > %s", $php_interpreter, $cron_script, $outputfile, $pidfile));
}
?>
