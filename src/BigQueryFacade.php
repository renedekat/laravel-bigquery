<?php

namespace ReneDeKat\BigQuery;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ReneDeKat\BigQuery\BigQuery
 */
class BigQueryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bigquery';
    }
}
