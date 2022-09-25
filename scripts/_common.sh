#!/bin/bash

#=================================================
# COMMON VARIABLES
#=================================================

# dependencies used by the app
YNH_PHP_VERSION="7.4"

pkg_dependencies="php${YNH_PHP_VERSION}-tidy php${YNH_PHP_VERSION}-intl php${YNH_PHP_VERSION}-mbstring php${YNH_PHP_VERSION}-xml php${YNH_PHP_VERSION}-gd php${YNH_PHP_VERSION}-curl php${YNH_PHP_VERSION}-mysql"

pgsql_pkg_dependencies="postgresql php${YNH_PHP_VERSION}-pgsql"

#=================================================
# PERSONAL HELPERS
#=================================================

#=================================================
# EXPERIMENTAL HELPERS
#=================================================

#=================================================
# FUTURE OFFICIAL HELPERS
#=================================================
