<?php
declare(strict_types=1);

namespace App;

class SourceB implements SourceInterface
{
    public function run(): string
    {
        return __METHOD__;    
    }
}

