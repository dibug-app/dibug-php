<?php

namespace Dibug\Formatters;

abstract class DibugFormatter
{
    abstract public function format(mixed $variable);
}