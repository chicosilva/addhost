<?php

/**
 * Configuration File
 *
 * This file configures the folders and apache users
 * 
 * @author Evaldo Barbosa <evaldobarbosa@gmail.com>
 * @link   https://github.com/evaldobarbosa/addhost
 */

ini_set("display_errors", "Off");
ini_set("error_reporting", E_ALL ^ E_NOTICE ^ E_WARNING);

define("APACHE_VHOST_PATH", "/etc/apache2/sites-enabled");
define("APACHE_GROUP", "www-data");
define("CURRENT_USER", "your_user");
define("HOSTS_FILE", "/etc/hosts");

/* Defines Lang. (pt_BR, de_DE or en_US ) */
define("LANGUAGE", 'pt_BR');
