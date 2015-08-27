PHP_CRON
=========

**Library name**: PHP_CRON 
**Version**: 1.0
**Release date**: 2012-06-03
**Author**:	 Matteo Mattei <matteo.mattei@gmail.com>

**Copyright** (&copy;) 2012 - Matteo Mattei - http://www.matteomattei.com

**URLs**:

 - http:  http://www.matteomattei.com
 - http:  https://github.com/matteomattei/PhpCron

**Description**: 	PHP_CRON is a PHP library for running and managing cron jobs in webservers that don't allow them.

**Main Features**:

   - External ini file to customize and configure cronjobs.
   - Possibility to run different types of interpreters.
   - Check for single instance of the program.
   - Limited support for linux/unix cronjob syntax.

**Installation**:

 1. Copy the folder on your Web server.
 2. Make sure to set write permission on ```logs``` folder.
 3. Set PHP path in ```runner.php``` in case your php binary is not located in /usr/bin/.
 4. Add ```include('/path/to/PhpCron/runner.php')``` in a place of your scripts that is often executed (maybe in a login?!)
 5. Setup ```php_cron.ini``` file to customize and configure your cronjobs

**License**:

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
