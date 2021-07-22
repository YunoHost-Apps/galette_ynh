# Galette pour YunoHost

[![Niveau d'intégration](https://dash.yunohost.org/integration/galette.svg)](https://dash.yunohost.org/appci/app/galette) ![](https://ci-apps.yunohost.org/ci/badges/galette.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/galette.maintain.svg)  
[![Installer Galette avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=galette)

*[Read this readme in english.](./README.md)*
*[Lire ce readme en français.](./README_fr.md)*

> *Ce package vous permet d'installer Galette rapidement et simplement sur un serveur YunoHost.
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/#/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Outil de gestion d'adhérents et de cotisation en ligne pour associations

**Version incluse :** 0.9.5~ynh1

**Démo :** https://demo.galette.eu/login

## Captures d'écran

![](./doc/screenshots/edit_member.png)

## Documentations et ressources

* Site officiel de l'app : https://www.galette.eu
* Documentation officielle utilisateur : https://yunohost.org/apps
* Documentation officielle de l'admin : https://doc.galette.eu/fr/master/
* Dépôt de code officiel de l'app : https://github.com/galette/galette
* Documentation YunoHost pour cette app : https://yunohost.org/app_galette
* Signaler un bug : https://github.com/YunoHost-Apps/galette_ynh/issues

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/galette_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
ou
sudo yunohost app upgrade galette -u https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
```

**Plus d'infos sur le packaging d'applications :** https://yunohost.org/packaging_apps