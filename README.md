# Galette for YunoHost

[![Integration level](https://dash.yunohost.org/integration/galette.svg)](https://dash.yunohost.org/appci/app/galette) ![](https://ci-apps.yunohost.org/ci/badges/galette.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/galette.maintain.svg)  
[![Install Galette with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=galette)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install Galette quickly and simply on a YunoHost server.  
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview
Galette is a membership management web application towards non profit organizations.

**Shipped version:** 0.9.4.2

## Screenshots

![](https://galette.eu/site/assets/images/screenshots/edit_member.png)

## Demo

* [Official demo](https://demo.galette.eu/login)

## Configuration

How to configure this app: From an admin panel, a plain file with SSH, or any other way.

## Documentation

 * Official documentation: https://doc.galette.eu/fr/master/
 * YunoHost documentation: If specific documentation is needed, feel free to contribute.

## YunoHost specific features

#### Multi-user support

 * Are LDAP and HTTP auth supported?
 * Can the app be used by multiple users?

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/galette%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/galette/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/galette%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/galette/)

## Limitations

* Any known limitations.

## Additional information

* Other info you would like to add about this app.

## Links

 * Report a bug: https://github.com/YunoHost-Apps/galette_ynh/issues
 * App website: http://galette.eu/
 * Upstream app repository: https://github.com/galette/galette
 * YunoHost website: https://yunohost.org/

---

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/REPLACEBYYOURAPP_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
or
sudo yunohost app upgrade galette -u https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
```
