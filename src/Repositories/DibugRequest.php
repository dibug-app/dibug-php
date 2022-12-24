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

    public function send(mixed $variable, array|null $file, int|null $line): DibugResponse
    {
        $this->adapter->send($this->formatter->format(
            variable: $variable,
            file: $file,
            line: $line
        ));
        return new DibugResponse();
    }
}