<!--
Ohart ongi: README hau automatikoki sortu da <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>ri esker
EZ editatu eskuz.
-->

# Galette YunoHost-erako

[![Integrazio maila](https://apps.yunohost.org/badge/integration/galette)](https://ci-apps.yunohost.org/ci/apps/galette/)
![Funtzionamendu egoera](https://apps.yunohost.org/badge/state/galette)
![Mantentze egoera](https://apps.yunohost.org/badge/maintained/galette)

[![Instalatu Galette YunoHost-ekin](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=galette)

*[Irakurri README hau beste hizkuntzatan.](./ALL_README.md)*

> *Pakete honek Galette YunoHost zerbitzari batean azkar eta zailtasunik gabe instalatzea ahalbidetzen dizu.*  
> *YunoHost ez baduzu, kontsultatu [gida](https://yunohost.org/install) nola instalatu ikasteko.*

## Aurreikuspena

Galette is a membership management web application towards non profit organizations.

### Features

- Member management
- Management of contributions and transactions
- Management of groups and managers
- Imports and exports (open formats)
- Increased accessibility (use and compliance with web standards)
- Configuration of cards and lists
- Addition of dynamic fields to members, contributions and transactions files
- Plugin support


**Paketatutako bertsioa:** 1.1.5.2~ynh1

**Demoa:** <https://demo.galette.eu/login>

## Pantaila-argazkiak

![Galette(r)en pantaila-argazkia](./doc/screenshots/edit_member.png)

## Dokumentazioa eta baliabideak

- Aplikazioaren webgune ofiziala: <https://www.galette.eu>
- Administratzaileen dokumentazio ofiziala: <https://doc.galette.eu/fr/master/>
- Jatorrizko aplikazioaren kode-gordailua: <https://github.com/galette/galette>
- YunoHost Denda: <https://apps.yunohost.org/app/galette>
- Eman errore baten berri: <https://github.com/YunoHost-Apps/galette_ynh/issues>

## Garatzaileentzako informazioa

Bidali `pull request`a [`testing` abarrera](https://github.com/YunoHost-Apps/galette_ynh/tree/testing).

`testing` abarra probatzeko, ondorengoa egin:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
edo
sudo yunohost app upgrade galette -u https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
```

**Informazio gehiago aplikazioaren paketatzeari buruz:** <https://yunohost.org/packaging_apps>
