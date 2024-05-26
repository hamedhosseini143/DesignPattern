<?php

namespace src\DesignPattern\CreationalPatterns\Builder\RequestBuilder;

use GuzzleHttp\Client;

class NormalRequest
{
    private $uri;
    private $method;
    private $headers;
    private $data;
    private $agent;

    public function __construct($uri, $method, $headers, $data, $agent)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->headers = $headers;
        $this->data = $data;
        $this->agent = $agent;
    }

    public function run(): string
    {
        $client = new Client();
        $response = $client->request($this->method, $this->uri, [
            'headers' => $this->headers,
            'body' => json_encode($this->data),
            'agent' => $this->agent
        ]);
        return $response->getBody()->getContents();
    }
}