<?php


use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

date_default_timezone_set('Europe/Paris');
require_once "vendor/autoload.php";
$isDevMode = true;
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__ . "/config/yaml"), $isDevMode);

$conn = array(
    'host' => "ec2-34-248-148-63.eu-west-1.compute.amazonaws.com",
    'driver' => 'pdo_pgsql',
    'user' => "nprilshbkuvigv",
    'password' => "b40887cfcd0fcbd5c0471585df9560808d7f46db97f086af0c5afdb1d8b1df77",
    'dbname' => "deanggql5s71gn",
    'port' => 5432,
);

$entityManager = EntityManager::create($conn, $config);