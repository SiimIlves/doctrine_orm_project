<?php

$entitymanager = \App\Service\Databasefactory::create();

require_once('vendor/autoload.php');

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
$entitymanager);
