<?php

namespace src\DesignPattern\Proxy\GoogleApi;

interface GoogleMapApiInterface
{
    public function findPlaceLatLng(string $lat, string $lng): string;
}
