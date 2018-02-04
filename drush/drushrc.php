<?php

// Test shell-alias, use "drush foobar"
$options['shell-aliases']['foobar'] = '!drush sa';


// SET FIRST PROD ENV TO DRUSH ALIASES

// Sync database from remote to local
// $options['shell-aliases']['sync-db'] = '!drush sql-sync @production @self';

// Sync files folder from remote to local
// $options['shell-aliases']['sync-files'] = '!drush rsync --mode=Pakzu --exclude=css --exclude=js @production:%files @self:%files';