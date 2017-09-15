<?php

namespace Zev\Entrance;


class Entrance
{
    /**
     * Laravel application
     *
     * @var \Illuminate\Foundation\Application
     */
    public $app;

    /**
     * Entrance constructor.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * define yourself function.
     *
     * @return mixed
     */
    public function yourFunc()
    {
        //return $this->app->auth->user();
    }
}
