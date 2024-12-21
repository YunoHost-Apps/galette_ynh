<!--
注意：此 README 由 <https://github.com/YunoHost/apps/tree/master/tools/readme_generator> 自动生成
请勿手动编辑。
-->

# YunoHost 上的 Galette

[![集成程度](https://apps.yunohost.org/badge/integration/galette)](https://ci-apps.yunohost.org/ci/apps/galette/)
![工作状态](https://apps.yunohost.org/badge/state/galette)
![维护状态](https://apps.yunohost.org/badge/maintained/galette)

[![使用 YunoHost 安装 Galette](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=galette)

*[阅读此 README 的其它语言版本。](./ALL_README.md)*

> *通过此软件包，您可以在 YunoHost 服务器上快速、简单地安装 Galette。*  
> *如果您还没有 YunoHost，请参阅[指南](https://yunohost.org/install)了解如何安装它。*

## 概况

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


**分发版本：** 1.1.4~ynh1

**演示：** <https://demo.galette.eu/login>

## 截图

![Galette 的截图](./doc/screenshots/edit_member.png)

## 文档与资源

- 官方应用网站： <https://www.galette.eu>
- 官方管理文档： <https://doc.galette.eu/fr/master/>
- 上游应用代码库： <https://github.com/galette/galette>
- YunoHost 商店： <https://apps.yunohost.org/app/galette>
- 报告 bug： <https://github.com/YunoHost-Apps/galette_ynh/issues>

## 开发者信息

请向 [`testing` 分支](https://github.com/YunoHost-Apps/galette_ynh/tree/testing) 发送拉取请求。

如要尝试 `testing` 分支，请这样操作：

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
或
sudo yunohost app upgrade galette -u https://github.com/YunoHost-Apps/galette_ynh/tree/testing --debug
```

**有关应用打包的更多信息：** <https://yunohost.org/packaging_apps>
