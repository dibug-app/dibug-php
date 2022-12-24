<?php

namespace Dibug\Formatters;

class JsonFormatter extends DibugFormatter
{

    public function format(mixed $variable)
    {
        return [
            "type" => "info",
            "data" => $variable
        ];
    }
}