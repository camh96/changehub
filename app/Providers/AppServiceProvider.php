<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp;
use Cache;
use Debugbar;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->addWeatherConditionToView();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function addWeatherConditionToView()
    {
        $condition = Cache::get('weatherCondition', function () {
            return $this->updateWeatherConditionCache();
        });

        view()->share('weatherCondition', $condition->text);
        view()->share('weatherTemp', $condition->temp);
    }

    private function updateWeatherConditionCache()
    {
        try {
            $client = new GuzzleHttp\Client();
            $weatherUrl = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22Christchurch%2C%20New%20Zealand%22)%20and%20u%3D%22c%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=';
            $res = $client->get($weatherUrl);
            $json = $res->getBody();
            $weatherData = json_decode($json);
            $condition = $weatherData->query->results->channel->item->condition;
            Debugbar::info('Updated Weather from Yahoo API', $condition);
            Cache::put('weatherCondition', $condition, 30);
        } catch (\GuzzleHttp\Exception\ConnectException $e) {
            return json_decode('{"text": "Unknown", "temp": "?"}');
        }
        return $condition;
    }
}
