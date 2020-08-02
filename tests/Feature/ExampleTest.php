<?php

use function Tests\cleanUpDatabase;

/**
 * Cleanup database after each test case
 */

//beforeEach(fn() => cleanUpDatabase())

it('should get app version', function () {
    $this->get('/v1/health');

    $this->assertEquals([
            "message" => "api is healthy",
            "apiVersion" => "v1",
            "lumenVersion" => "Lumen (7.2.1) (Laravel Components ^7.0)"
        ],
        json_decode($this->response->getContent(), true)
    );
});
