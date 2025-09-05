# Upgrade Guide to Sylius 2.x

This document describes the main changes made during the plugin migration to Sylius 2.x.

## File Restructuring

### Configuration

Configuration files have been moved from `src/Resources/config/` to the root `config/` directory:

- `src/Resources/config/services.yaml` → `config/services.yaml`
- `src/Resources/config/sylius/images.yaml` → `config/images.yaml` 
- `src/Resources/config/monsieurbiz/settings.yaml` → `config/settings.yaml`
- New `config/twig_hooks.yaml` file for Twig hooks replace sylius_ui
- New main `config/config.yaml` file

### Templates

Twig templates have been migrated to use Sylius 2.x's new hook system:

- Migration to Twig Hooks instead of template overrides
- Removed `src/Resources/views/Admin/_styles.html.twig`
- Updated template paths in configuration

### Translations

Translation files remain in the `translations/` folder at the project root (no major changes).

## Technical Modifications

### Bundle Extension

- Updated `MonsieurBizSyliusBetterAdminExtension` to point to the new `config/` folder
- Simplified `MonsieurBizSyliusBetterAdminPlugin` with added `getPath()` method
- Extension alias change: `monsieurbiz_better_admin` → `monsieur_biz_sylius_better_admin`

### Dependencies

Updated dependencies for Sylius 2.x:
- `monsieurbiz/sylius-media-manager-plugin: ^2.0`
- `monsieurbiz/sylius-settings-plugin: ^2.0`
- `sylius/sylius: ~2.0`

### Tests and CI/CD

- Dropped PHP 8.1 support in GitHub Actions workflows
- Updated test commands to point to new file paths



For more details on specific changes, see [pull request #4](https://github.com/monsieurbiz/SyliusBetterAdminPlugin/pull/4/files).
