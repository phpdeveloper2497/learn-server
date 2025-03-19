<?php

namespace Services;

class WeatherService
{

    public function __construct()
    {
        $this->url = config('weather.url');
        $this->key = config('weather.key');
    }

    public function getWeather(){

    }
}
