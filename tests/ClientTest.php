<?php

declare(strict_types=1);

namespace App\Tests;

use App\Client;
use App\SourceInterface;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testRunCallsSourceMethod()
    {
        $source = $this->createMock(SourceInterface::class);
        $source->expects($this->once())
               ->method('run');
        $client = new Client($source);
        $client->run();
    }
}
