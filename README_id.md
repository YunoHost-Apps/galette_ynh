<!--
N.B.: README ini dibuat secara otomatis oleh <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Ini TIDAK boleh diedit dengan tangan.
-->

# Galette untuk YunoHost

[![Tingkat integrasi](https://apps.yunohost.org/badge/integration/galette)](https://ci-apps.yunohost.org/ci/apps/galette/)
![Status kerja](https://apps.yunohost.org/badge/state/galette)
![Status pemeliharaan](https://apps.yunohost.org/badge/maintained/galette)

[![Pasang Galette dengan YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=galette)

*[Baca README ini dengan bahasa yang lain.](./ALL_README.md)*

> *Paket ini memperbolehkan Anda untuk memasang Galette secara cepat dan mudah pada server YunoHost.*  
> *Bila Anda tidak mempunyai YunoHost, silakan berkonsultasi dengan [panduan](https://yunohost.org/install) untuk mempelajari bagaimana untuk memasangnya.*

## Ringkasan

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


**Versi terkirim:** 1.1.3~ynh1

**Demo:** <https://demo.galette.eu/login>

## Tangkapan Layar

![Tangkapan Layar pada Galette](./doc/screenshots/edit_member.png)

## Dokumentasi dan sumber daya

- Website aplikasi resmi: <https://www.galette.eu>
- Dokumentasi admin resmi: <https://doc.galette.eu/fr/master/>
- Depot kode aplikasi hulu: <https://github.com/galette/galette>
- Gudang YunoHost: <https://apps.yunohost.org/app/galette>
- Laporkan bug: <https://github.com/YunoHost-Apps/galette_ynh/issues>

## Info developer

Silakan kirim pull request ke [`testing` branch](https://github.com/YunoHost-Apps/galette_ynh/tree/testing).

Untuk mencoba branch `testing`, silakan dilanjutkan seperti:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
atau
sudo yunohost app upgrade galette -u https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
```

**Info lebih lanjut mengenai pemaketan aplikasi:** <https://yunohost.org/packaging_apps>
