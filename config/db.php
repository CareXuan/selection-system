<?php

$user_name = 'root';
$user_password = 'root';

return [
    'content_db' => [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=localhost;dbname=xuan',
      'username' => $user_name,
      'password' => $user_password,
      'charset' => 'utf8',
    ]

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
