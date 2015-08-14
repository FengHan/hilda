<?php
use Illuminate\Database\Capsule\Manager as Capsule;
// autoload
require '../vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require '../config/database.php');
$capsule->bootEloquent();

// routes config
require '../config/routes.php';

