<?php

namespace ReneDeKat\BigQuery\Tests\Integration;

use ReneDeKat\BigQuery\Exceptions\InvalidConfiguration;

class BigQueryServiceProviderTest extends TestCase
{
    /** @test */
    public function it_will_throw_an_exception_if_credentials_file_is_not_given()
    {
        $this->expectException(InvalidConfiguration::class);

        \BigQuery::bytes('hello world');
    }
}
