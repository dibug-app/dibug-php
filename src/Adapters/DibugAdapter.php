<?php

namespace Dibug\Adapters;

abstract class DibugAdapter
{
    abstract public function send(mixed $variable): void;
}