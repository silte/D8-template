<?php
/**
 * @file
 * Drupal 8 all environment configuration file.
 *
 * This file should contain all settings.php configurations that are needed by all environments.
 */

$config_directories[CONFIG_SYNC_DIRECTORY] = '../conf/cmi';

// Install profile
$settings['install_profile'] = 'config_installer';

// Public files path
$settings['file_public_path'] = 'sites/default/files';

// Private files path
$settings['file_private_path'] = realpath(.'/../files_private');
