<?php
declare(strict_types=1);

use App\Client;
use App\SourceA;
use App\SourceB;
use App\SourceInterface;
use League\Container\Container;

require __DIR__ . '/vendor/autoload.php';

$container = new Container();
$container->add(SourceInterface::class, SourceB::class);
$container->add(Client::class)->addArgument(SourceInterface::class);

$client = $container->get(Client::class);
echo $client->run();
