<?php
/**
 * @file
 * Drupal 8 development environment configuration file.
 *
 * This file will only be included on development environments.
 */

// Show all error messages on the site
$config['system.logging']['error_level'] = 'all';

// Disable Google Analytics from sending data from dev.
$config['google_analytics.settings']['account'] = 'UA-XXXXXXXX-YY';

// Dev environment changes for easier debugging
$config['system.performance']['cache']['page']['max_age'] = 0;
$config['system.performance']['css']['preprocess'] = 0;
$config['system.performance']['js']['preprocess'] = 0;


