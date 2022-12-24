<?php

namespace Dibug\Repositories;

use Dibug\Adapters\DibugAdapter;
use Dibug\Formatters\DibugFormatter;

class DibugRequest
{
    public function __construct(
        private DibugAdapter $adapter,
        private DibugFormatter $formatter
    ) {}

    public function send(mixed $variable): DibugResponse
    {
        $this->adapter->send($this->formatter->format($variable));
        return new DibugResponse();
    }
}