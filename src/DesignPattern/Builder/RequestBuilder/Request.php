<?php

namespace src\DesignPattern\Builder\RequestBuilder;

class Request
{
    private string $uri;
    private string $method;
    private array $headers;
    private array $data;
    private string $agent;

    public function __construct(RequestBuilder $builder)
    {
        $this->uri = $builder->getUri();
        $this->method = $builder->getMethod();
        $this->headers = $builder->getHeaders();
        $this->data = $builder->getData();
        $this->agent = $builder->getAgent();
    }

    public function run() : ?string
    {
        $request = curl_init($this->uri);

        return null;
    }
}
