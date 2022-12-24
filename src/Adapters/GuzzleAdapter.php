<?php

namespace Dibug\Adapters;

use GuzzleHttp\Client;

class GuzzleAdapter extends DibugAdapter
{
    private Client $client;
    private String $serverUrl = "http://localhost:33285";

    public function __construct()
    {
        $this->client = new Client();
    }

    public function send(mixed $body): void
    {
        $this->client->request('POST', $this->serverUrl, [
            "json" => $body
        ]);
    }
}