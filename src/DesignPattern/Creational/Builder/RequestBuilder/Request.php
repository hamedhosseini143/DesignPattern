<?php

namespace src\DesignPattern\Creational\Builder\RequestBuilder;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Request
{
    /**
     * @var string
     */
    private string $uri;
    /**
     * @var string
     */
    private string $method;
    /**
     * @var array
     */
    private array $headers;
    /**
     * @var array
     */
    private array $data;
    /**
     * @var string
     */
    private string $agent;

    /**
     * @param RequestBuilder $builder
     */
    public function __construct(RequestBuilder $builder)
    {
        $this->uri = $builder->getUri();
        $this->method = $builder->getMethod();
        $this->headers = $builder->getHeaders();
        $this->data = $builder->getData();
        $this->agent = $builder->getAgent();
    }


    /**
     * @throws GuzzleException
     */
    public function run(): string
    {
        $client = new Client();
        $response = $client->request($this->method, $this->uri, [
            'headers' => $this->headers,
            'body' => json_encode($this->data),
            'agent' => $this->agent
        ]);
        $content = $response->getBody()->getContents();
        return Json_encode($content);
    }

}
