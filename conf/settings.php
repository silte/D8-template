<?php
/**
 * @file
 * Drupal 8 configuration file.
 *
 * You should not edit this file after first edit, please use environment specific files!
 * They are loaded in this order:
 * - all.settings.php
 *   For settings that should be applied to all environments (dev, prod, staging, docker, etc).
 * - all.services.yml
 *   For services that should be applied to all environments (dev, prod, staging, docker, etc).
 * - settings.prod.php / settings.dev.php
 *   For settings only for the production/development environment.
 * - services.prod.yml / services.dev.yml
 *   For services only for the production/development environment.
 */



### Trusted Host Patterns, see https://www.drupal.org/node/2410395 for more information.
### If your site runs on multiple domains, you need to add these domains here
/*
$settings['trusted_host_patterns'] = array(
// '^example\.com',
  '^{CHANGE-ME}$',
);
*/

// Database configuration for the project.
$databases['default']['default'] = array (
  'database' => '{CHANGE-ME}',
  'username' => '{CHANGE-ME}',
  'password' => '{CHANGE-ME}',
  'prefix' => '{CHANGE-ME}',
  'host' => '{CHANGE-ME}',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
  'collation' => 'utf8mb4_swedish_ci',
);

### Hash Salt
// Get your Hash Salt generated here:
// http://drupalhashsalt.com/
$settings['hash_salt'] = '{CHANGE-ME}';


// Settings for all environments
if (file_exists(__DIR__ . '/all.settings.php')) {
  include __DIR__ . '/all.settings.php';
}

// Services for all environments
if (file_exists(__DIR__ . '/all.services.yml')) {
  $settings['container_yamls'][] = __DIR__ . '/all.services.yml';
}

if (file_exists(__DIR__ . '/settings.env.php')) {
  include __DIR__ . '/settings.env.php';
}
if (file_exists(__DIR__ . '/services.env.yml')) {
  $settings['container_yamls'][] = __DIR__ . '/services.env.yml';
}
