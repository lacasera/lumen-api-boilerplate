<?php

use function Tests\cleanUpDatabase;

/**
 * Cleanup database after each test case
 */

//beforeEach(fn() => cleanUpDatabase())

it('should get app version', function () {
    $this->get('/v1/health');

    $this->assertEquals(
        $this->app->version(),
        $this->response->getContent()
    );
});
