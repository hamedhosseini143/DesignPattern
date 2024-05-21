<?php

namespace app\src\DesignPattern\Builder\RequestBuilder;

use app\src\DesignPattern\Builder\RequestBuilder\RequestBuilder;

class ApiService
{
    public function fatchUser(): void
    {
        $request = (new RequestBuilder)->forg()
            ->withUri('https://jsonplaceholder.typicode.com/users')
            ->withMethod('GET')
            ->withHeaders(['Content-Type' => 'application/json'])
            ->withAgent('Mozilla/5.0')
            ->build();
        $request->run();
    }
}
