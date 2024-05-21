<?php

namespace src\DesignPattern\Proxy\GoogleApi;

use function app\DesignPattern\Proxy\GoogleApi\env;

class GoogleMapProxy implements GoogleMapApiInterface
{

    /**
     * @var GoogleMapApiInterface
     */
    private GoogleMapApiInterface $googleMapApi;

    /**
     * @param GoogleMapApiInterface $googleMapApi
     */
    public function __construct(GoogleMapApiInterface $googleMapApi)
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
