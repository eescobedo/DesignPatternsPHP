<?php namespace ObserverPattern;

class WeatherData
{

    public function measurementsChanged()
    {
        $temp = $this->getTemperature();
        $humidity = $this->getHumidity();
        $pressure = $this->getPressure();


        currentConditionsDisplay.update($temp, $humidity, $pressure);
        statisticsDisplay.update($temp, $humidity, $pressure);
        forecastDisplay.update($temp, $humidity, $pressure);

    }

    // other WeatherData methods here

    private function getTemperature()
    {
        echo 'temperature';
        return 23;
    }

    private function getHumidity()
    {
        echo 'humidity';
        return 30;
    }

    private function getPressure()
    {
        echo 'pressure';
        return 100;
    }

}