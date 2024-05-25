<?php

namespace src\DesignPattern\Creational\Builder\RequestBuilder;

use GuzzleHttp\Exception\GuzzleException;

class ApiService
{
    /**
     * @return string
     */
    public function fetchUser(): string
    {
        $request = (new RequestBuilder)->create()
            ->withUri('https://jsonplaceholder.typicode.com/users')
            ->withMethod('GET')
            ->withHeaders(['Content-Type' => 'application/json'])
            ->withAgent('Mozilla/5.0')
            ->build();
        try {
            return $request->run();
        } catch (GuzzleException $e) {
            echo $e->getMessage();
        }

        return '';
    }
}
