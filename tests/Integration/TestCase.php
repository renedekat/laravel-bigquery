<?php

namespace ReneDeKat\BigQuery\Tests\Integration;

use ReneDeKat\BigQuery\BigQueryFacade;
use Orchestra\Testbench\TestCase as Orchestra;
use ReneDeKat\BigQuery\BigQueryServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            BigQueryServiceProvider::class,
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'BigQuery' => BigQueryFacade::class,
        ];
    }
}
