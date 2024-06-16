<?php

namespace src\DesignPattern\StructuralPatterns\Proxy\CachRepository;

class Repository
{
    public function remember($key, $minutes, $callback)
    {
        return $callback();
    }
}