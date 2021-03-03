<?php

require 'laminas-loader-2.8.x/src/AutoloaderFactory.php';
require 'Aws/functions.php';

$config = [
    'Laminas\Loader\StandardAutoloader' => [
        'namespaces' => [
            'Aws' => __DIR__ . '/Aws',
	    'GuzzleHttp' => __DIR__ . '/GuzzleHttp',
            'JmesPath' => __DIR__ . '/JmesPath',
        ],
    ],
];

\Laminas\Loader\AutoloaderFactory::factory($config);
