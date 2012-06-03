PHP_CRON - README
============================================================

Name: PHP_CRON 
Version: 1.0
Release date: 2012-06-03
Author:	Matteo Mattei <matteo.mattei@gmail.com>

Copyright (c) 2012:
	Matteo Mattei
	www.matteomattei.com

URLs:
	http:  www.matteomattei.com
	http:  https://github.com/matteomattei/PhpCron

Description:
	PHP_CRON is a PHP library for running and managing cron jobs in webservers that don't allow them.

Main Features:
    * external ini file to customize and configure cronjobs;
    * possibility to run different types of interpreters;
    * check for single instance of the program;
    * limited support for linux/unix cronjob syntax;

Installation:
	1. copy the folder on your Web server
	2. make sure to set write permission on logs folder
	3. set path and parameters on the runner.php
	4. add include('/path/to/PhpCron/runner.php') in a place of your scripts that is often executed (maybe in a login?!)
	5. setup php_cron.ini file to customize and configure your cronjobs

License
	Copyright (C) 2012 Matteo Mattei <matteo.mattei@gmail.com>

	PHP_CRON is free software: you can redistribute it and/or modify it
	under the terms of the GNU Lesser General Public License as
	published by the Free Software Foundation, either version 3 of the
	License, or (at your option) any later version.

	PHP_CRON is distributed in the hope that it will be useful, but
	WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU Lesser General Public License for more details.

	You should have received a copy of the License
	along with PHP_CRON.

	See LICENSE.txt file for more information.

============================================================
