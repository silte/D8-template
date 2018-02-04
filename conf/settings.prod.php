<?php
/**
 * @file
 * Drupal 8 production environment configuration file.
 *
 * This file will only be included on production environments.
 */

// Don't show any error messages on the site (will still be shown in watchdog)
$config['system.logging']['error_level'] = 'hide';

// Prod environment changes for better performance
$config['system.performance']['cache']['page']['max_age'] = 900;
$config['system.performance']['css']['preprocess'] = 1;
$config['system.performance']['js']['preprocess'] = 1;
$config['stage_file_proxy.settings']['origin'] = false;
