<?php

namespace src\DesignPattern\StructuralPatterns\Proxy\GoogleApi;

interface GoogleMapApiInterface
{
    public function findPlaceLatLng(string $lat, string $lng): string;
}
