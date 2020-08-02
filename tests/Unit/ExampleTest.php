<?php

it('should get app version', function() {
    $this->get('/v1/health');

    $this->assertEquals(
        $this->app->version(),
        $this->response->getContent()
    );

}); 