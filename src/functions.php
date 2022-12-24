<?php

use Dibug\Adapters\GuzzleAdapter;
use Dibug\Formatters\JsonFormatter;

if (!function_exists('dibug')) {
    function dibug(mixed $variable): void
    {
        $trace = current(debug_backtrace(limit: 1));

        $request = new \Dibug\Repositories\DibugRequest(
            adapter: new GuzzleAdapter(),
            formatter: new JsonFormatter()
        );

        $path = $trace["file"];

        $file = [
            "path" => $path,
            "name" => basename($path)
        ];

        $request->send(
            variable: $variable,
            file: $file,
            line: $trace["line"]
        );
    }
}
