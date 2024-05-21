<?php

namespace src\DesignPattern\Builder\RequestBuilder;

class RequestBuilder
{
    private string $uri;
    private string $method;
    private array $headers;
    private array $data;
    private string $agent;

    /**
     * @var $request Request
     */
    private $request;

    public function forg(): RequestBuilder
    {
        return new RequestBuilder();
    }

    public function withuri(string $uri): RequestBuilder
    {
        $this->uri = $uri;
        return $this;
    }

    public function withMethod(string $method): RequestBuilder
    {
        $this->method = $method;
        return $this;
    }

    public function withHeaders(array $headers): RequestBuilder
    {
        $this->headers = $headers;
        return $this;
    }


    public function withData(array $data): RequestBuilder
    {
        $this->data = $data;
        return $this;
    }

    public function withAgent(string $agent): RequestBuilder
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }



    public function build(): Request
    {
        return new Request($this);
    }


}
