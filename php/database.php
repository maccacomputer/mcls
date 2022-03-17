<?php
$config = [
    'db_engine' => 'mysql',
    'db_host' => 'localhost',
    'db_name' => 'my_maccacomputer',
    'db_user' => 'maccacomputer',
    'db_password' => 'QYxgdnPD3Htd',
];

$db_config = $config['db_engine'] . ":host=".$config['db_host'] . ";dbname=" . $config['db_name'];

try {
    $pdo = new PDO($db_config, $config['db_user'], $config['db_password'], [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]);
        
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    exit("Impossibile connettersi al database: " . $e->getMessage());
}