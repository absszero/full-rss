<?php

class TestCase extends Laravel\Lumen\Testing\TestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }

    public function initMock(string $className)
    {
        $mock = \Mockery::mock($className);
        app()->instance($className, $mock);
        return $mock;
    }
}
