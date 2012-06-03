<?php
//============================================================+
// File name   : php_cron.php
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

$cur_min = date('i');
$logs_dir = dirname(__FILE__).'/logs/';

while(TRUE)
{
	$now = explode(' ',date('i H d'));
	if($cur_min === $now[0])
	{
		sleep(1);
		continue;
	}
	$cur_min = $now[0];
	$content = parse_ini_file(dirname(__FILE__).'/php_cron.ini',TRUE);
	foreach($content as $k=>$cronjob)
	{
		$interval = preg_replace('/\t/',' ',$cronjob['interval']);
		$interval = explode(' ',$interval);
		if(count($interval)!=3) continue;

		if($now[2] === $interval[2] || $interval[2] === '*')
		{
			if($now[1] === $interval[1] || $interval[1] === '*')
			{
				if($now[0] === $interval[0] || $interval[0] === '*')
				{
					$outputfile = $logs_dir.$k.'.log';
					file_put_contents($outputfile,"====== ".date('Y-m-d H:i:s')." ======\n",FILE_APPEND);
					exec(sprintf("%s %s >> %s 2>&1 &", $cronjob['interpreter'], $cronjob['cmd'], $outputfile));
				}
			}
		}
	}
	sleep(1);
}

?>
