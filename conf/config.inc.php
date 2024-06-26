<?php
/**
 * Copyright © 2003-2024 The Galette Team
 *
 * This file is part of Galette (https://galette.eu).
 *
 * Galette is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Galette is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Galette. If not, see <http://www.gnu.org/licenses/>.
 */

/*
This is an example for your configuration file,
read comments and replace the "blanks".
You can then copy the file in GALETTE_CONFIG_PATH/config.inc.php

$Id$
*/

/* choose your database engine, values : pgsql|mysql */
define("TYPE_DB", "pgsql"); 
/* hostname for the database */
define("HOST_DB", "localhost"); 
/* tcp port for the database */
define("PORT_DB", "5432"); 
/* the username for the database */
define("USER_DB", "__DB_USER__");
/* password for the username define above */
define("PWD_DB", "__DB_PWD__");
/* the database name */
define("NAME_DB", "__DB_NAME__");
/* tables name prefix (default is galette_) */
define("PREFIX_DB", "galette_");
/* FIXME will disappear soon */
define("STOCK_FILES", "tempimages");
