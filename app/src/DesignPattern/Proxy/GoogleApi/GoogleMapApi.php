<?php

namespace app\src\DesignPattern\Proxy\GoogleApi;

use app\src\DesignPattern\Proxy\GoogleApi\GoogleMapApiInterface;

class GoogleMapApi implements GoogleMapApiInterface
{

    /**
     * @param string $lat
     * @param string $lng
     * @return string
     */
    public function findPlaceLatLng(string $lat, string $lng): string
    {
        // TODO: Implement findPlaceLatLng() method.
    }
}
