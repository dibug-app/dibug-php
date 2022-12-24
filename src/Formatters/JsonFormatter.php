<?php

namespace Dibug\Formatters;

class JsonFormatter extends DibugFormatter
{

    public function format(mixed $variable, array|null $file, int|null $line)
    {
        return [
            "type" => "info",
            "data" => $variable,
            "file" => $file,
            "line" => $line
        ];
    }
}