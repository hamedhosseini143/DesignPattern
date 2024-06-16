<?php

namespace src\DesignPattern\StructuralPatterns\Proxy\GoogleApi;

use function app\DesignPattern\Proxy\GoogleApi\env;

class GoogleMapProxy implements GoogleMapApiInterface
{


    private \src\DesignPattern\StructuralPatterns\Proxy\GoogleApi\GoogleMapApiInterface $googleMapApi;


    public function __construct(\src\DesignPattern\StructuralPatterns\Proxy\GoogleApi\GoogleMapApiInterface $googleMapApi)
    {
        $this->googleMapApi = $googleMapApi;
    }


    /**
     * @param string $lat
     * @param string $lng
     * @return string
     */
    public function findPlaceLatLng(string $lat, string $lng): string
    {
        if (env('APP_ENV') === 'production') {
            return $this->googleMapApi->findPlaceLatLng($lat, $lng);
        }
        return 'This is a proxy response';
    }
}
