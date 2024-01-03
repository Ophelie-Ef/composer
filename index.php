<?php

require __DIR__.'/vendor/autoload.php';

//https://packagist.org/packages/ramsey/uuid
//https://uuid.ramsey.dev

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

// echo '<pre>';
// var_dump($uuid);
// echo '</pre>';

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);