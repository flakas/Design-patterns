<?php

require('iLogger.php');
require('Log.php');
require('STDOutLogger.php');
require('DatabaseLogger.php');

// Create a new Log instance and configure it to use logging to stdOut strategy
$log = new Log(new STDOutLogger());

// Log some example information
$log->info('Logging to STDOut may be useful for testing');
$log->error('This is an error');
$log->log('Let\'s try swapping to a DatabaseLogger');

// During runtime we decide to start logging information to the database.
// We can simply set the new logger and continue logging
$log->setLogger(new DatabaseLogger('tmpserver'));

$log->log('Now our logger should be logging to the database');
$log->error('Logging error to the database');
