<?php

namespace App\Services\Client;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class JsonRpcClient
{
    public const JSON_RPC_VERSION = '2.0';

    public const METHOD_URI = 'data';

    protected Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'headers' => ['Content-Type' => 'application/json'],
            'base_uri' => config('app.url') . '/api/'
        ]);
    }

    public function send(string $method, array $params): array
    {
        $response = $this->client
            ->post(self::METHOD_URI, [
                RequestOptions::JSON => [
                    'jsonrpc' => self::JSON_RPC_VERSION,
                    'id' => time(),
                    'method' => $method,
                    'params' => $params
                ]
            ])->getBody()->getContents();

        return json_decode($response, true);
    }
}
