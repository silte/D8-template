# Drupal 8 project template

### BEFORE START

**Change every 'CHANGE-ME' found**

```
$ grep -r "{CHANGE-ME}" * 
```


## About the site

- Public web root in is `web` folder
- Configuration is in `conf` folder
- Custom modules are in `web/modules/custom` folder
- Custom themes are in `web/themes/custom` folder

### Contrib modules included

These recommended modules are included in the `composer.json`, but you can remove them if not needed.

- [Admin Toolbar](https://www.drupal.org/project/admin_toolbar) - Improved Drupal Toolbar
- [Pathauto](https://www.drupal.org/project/pathauto) - Automated URL alias generating


### Build codebase

This will download Drupal core and contrib modules See Composer section below.

```
$ composer build-dev
```

## Build tools

### Composer

This template uses [Composer](https://getcomposer.org) to build the codebase.

Installations rely on composer.lock file. This can be updated by running `composer build-dev` which will update the
lock file. Lock file us used by testing/staging/production builds and will not be updated then.

Build codebase with dev requirements and update composer.lock file:

```
$ composer build-dev
```

Build codebase without dev requirements:

```
$ composer build-prod
```
