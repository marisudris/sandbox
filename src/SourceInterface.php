<?php
declare(strict_types=1);

namespace App;

interface SourceInterface
{
    public function run(): string;
}

