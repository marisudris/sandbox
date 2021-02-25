<?php
declare(strict_types=1);

namespace App;

class Client {
    public function __construct(
        private SourceInterface $source
    ) {}

    public function run(): string
    {
        return $this->source->run();
    }
}

