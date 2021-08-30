<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
    ->withServiceAccount('polyblog-eb474-firebase-adminsdk-t1plh-ae878e1cdd.json')
    ->withDatabaseUri('https://polyblog-eb474-default-rtdb.firebaseio.com/');
$database = $factory->createDatabase();

$auth = $factory->createAuth();

?>