<h1 align="center">Sylius Better Admin</h1>

[![Better Admin Plugin license](https://img.shields.io/github/license/monsieurbiz/SyliusBetterAdminPlugin?public)](https://github.com/monsieurbiz/SyliusBetterAdminPlugin/blob/master/LICENSE.txt)
[![Tests Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusBetterAdminPlugin/tests.yaml?branch=master&logo=github)](https://github.com/monsieurbiz/SyliusBetterAdminPlugin/actions?query=workflow%3ATests)
[![Recipe Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusBetterAdminPlugin/recipe.yaml?branch=master&label=recipes&logo=github)](https://github.com/monsieurbiz/SyliusBetterAdminPlugin/actions?query=workflow%3ASecurity)
[![Security Status](https://img.shields.io/github/actions/workflow/status/monsieurbiz/SyliusBetterAdminPlugin/security.yaml?branch=master&label=security&logo=github)](https://github.com/monsieurbiz/SyliusBetterAdminPlugin/actions?query=workflow%3ASecurity)

This plugins allows you to customize colors, logos and background of the Sylius Admin Panel.

![Example of a customized admin panel](images/demo.jpg)

## Compatibility

| Sylius Version | PHP Version |
|---|---|
| 1.11 | 8.0 - 8.1 |
| 1.12 | 8.1 - 8.2 |
| 1.13 | 8.1 - 8.2 |

## Installation

If you want to use our recipes, you can configure your composer.json by running:

```bash
composer config --no-plugins --json extra.symfony.endpoint '["https://api.github.com/repos/monsieurbiz/symfony-recipes/contents/index.json?ref=flex/master","flex://defaults"]'
```

```bash
composer require monsieurbiz/sylius-better-admin-plugin
```

You can copy the templates to customize the display of the admin panel:

```
mkdir -p templates/bundles/;
cp -Rv vendor/monsieurbiz/sylius-better-admin-plugin/src/Resources/views/SyliusUiBundle templates/bundles/;
cp -Rv vendor/monsieurbiz/sylius-better-admin-plugin/src/Resources/views/SyliusAdminBundle templates/bundles/;
cp -Rv vendor/monsieurbiz/sylius-better-admin-plugin/src/Resources/views/MonsieurBizSyliusAdminBetterLoginPlugin templates/bundles/;
```

## Admin form

![Example of a customized admin panel](images/settings.jpg)

## License

This plugin is under the MIT license.
Please see the [LICENSE](LICENSE) file for more information.
