<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Activiti\Client\Model\ModelFactory;
use Activiti\Client\Service\ObjectSerializer;
use Activiti\Client\Service\ProcessDefinitionService;
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://localhost:8080/activiti-rest/service/',
    'auth' => [
        'kermit', 'kermit',
    ],
]);

$service = new ProcessDefinitionService($client, new ModelFactory(), new ObjectSerializer());

dump($service->getResourceData($argv[1]));
