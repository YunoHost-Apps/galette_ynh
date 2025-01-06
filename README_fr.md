<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# Galette pour YunoHost

[![Niveau d’intégration](https://apps.yunohost.org/badge/integration/galette)](https://ci-apps.yunohost.org/ci/apps/galette/)
![Statut du fonctionnement](https://apps.yunohost.org/badge/state/galette)
![Statut de maintenance](https://apps.yunohost.org/badge/maintained/galette)

[![Installer Galette avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=galette)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer Galette rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

Outil de gestion d'adhérents et de cotisation en ligne pour associations.


### Caractéristiques

- Gestion des adhérents
- Gestion des cotisations et transactions
- Gestion de groupes et de responsables
- Imports et exports (formats ouverts)
- Accessibilité accrue (utilisation et respect des standards du web)
- Configuration des fiches et des listes
- Ajout de champs dynamiques aux fiches adhérents, contributions et transactions
- Support de plugins


**Version incluse :** 1.1.5.1~ynh1

**Démo :** <https://demo.galette.eu/login>

## Captures d’écran

![Capture d’écran de Galette](./doc/screenshots/edit_member.png)

## Documentations et ressources

- Site officiel de l’app : <https://www.galette.eu>
- Documentation officielle de l’admin : <https://doc.galette.eu/fr/master/>
- Dépôt de code officiel de l’app : <https://github.com/galette/galette>
- YunoHost Store : <https://apps.yunohost.org/app/galette>
- Signaler un bug : <https://github.com/YunoHost-Apps/galette_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/galette_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
ou
sudo yunohost app upgrade galette -u https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
