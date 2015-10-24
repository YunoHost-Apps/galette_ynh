#!/usr/bin/python
import re 
import sys
from mechanize import Browser

path      = sys.argv[1]
password  = sys.argv[2]
admin     = sys.argv[3]
adminPass = sys.argv[4]

br = Browser()

# Ignore robots.txt
br.set_handle_robots( False )

# Set user agent as Firefox
br.addheaders = [('User-agent', 'Firefox')]

# Retrieve the instlation page
br.open( "http://"+path+"/install/installer.php" )

# Page 1 - requirement checks
br.select_form(nr=0)
br.submit()

# Page 2 - installation type (default is new installation)
br.select_form(nr=0)
br.submit()

# Page 3 - database configuration
br.select_form(nr=0)
br.form["install_dbuser"] = "galette"
br.form["install_dbpass"] = password
br.form["install_dbname"] = "galette"
br.submit()

# Page 4 - confirmation that database correctly configured
br.select_form(nr=0)
br.submit()

# Page 5 - database / table creations
br.select_form(nr=0)
br.submit()

# Page 6 - admin user creation
br.select_form(nr=0)
br.form["install_adminlogin"]      = admin
br.form["install_adminpass"]       = adminPass 
br.form["install_adminpass_verif"] = adminPass
br.submit()

# Page 7 - confirmation
br.select_form(nr=0)
br.submit()

exit()
