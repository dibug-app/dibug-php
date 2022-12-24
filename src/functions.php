<?php

use Dibug\Adapters\GuzzleAdapter;
use Dibug\Formatters\JsonFormatter;

if (!function_exists('dibug')) {
    function dibug(mixed $variable): void
    {
        $request = new \Dibug\Repositories\DibugRequest(
            adapter: new GuzzleAdapter(),
            formatter: new JsonFormatter()
        );

        $request->send($variable);
    }
}
