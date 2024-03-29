<?php
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
