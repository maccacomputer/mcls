<?php
$config = [
    'db_engine' => '', //example: 'db_engine' => 'mysql',
    'db_host' => '', // example: 'db_host' => 'localhost',
    'db_name' => '', //example: 'db_name' => 'my_database',
    'db_user' => '', //example: 'db_user' => 'paul',
    'db_password' => '', //example  'db_password' => 'yourpassword',
];

$db_config = $config['db_engine'] . ":host=".$config['db_host'] . ";dbname=" . $config['db_name'];

try {
    $pdo = new PDO($db_config, $config['db_user'], $config['db_password'], [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]);
        
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    exit("Unable to connect to database: " . $e->getMessage());
}
