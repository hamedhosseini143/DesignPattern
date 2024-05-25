<?php

namespace src\DesignPattern\Creational\Builder\RequestBuilder;

class RequestBuilder
{
    /**
     * @var string
     */
    private string $uri = '';
    /**
     * @var string
     */
    private string $method = '';
    /**
     * @var array
     */
    private array $headers = [];
    /**
     * @var array
     */
    private array $data = [];
    /**
     * @var string
     */
    private string $agent = '';

    /**
     * @var Request
     */
    private Request $request;

    /**
     * @return RequestBuilder
     */
    public function create(): RequestBuilder
    {
        return new RequestBuilder();
    }

    /**
     * @param string $uri
     * @return $this
     */
    public function withUri(string $uri): RequestBuilder
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * @param string $method
     * @return $this
     */
    public function withMethod(string $method): RequestBuilder
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @param array $headers
     * @return $this
     */
    public function withHeaders(array $headers): RequestBuilder
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function withData(array $data): RequestBuilder
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $agent
     * @return $this
     */
    public function withAgent(string $agent): RequestBuilder
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * @return Request
     */
    public function build(): Request
    {
        return new Request($this);
    }

    /**
     * @return string
     */
    public function getAgent(): string
    {
        return $this->agent;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }
}
