<?php namespace robjuz\LaravelPodio;


class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return LaravelPodio::class;
    }
}