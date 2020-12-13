<?php

namespace App\Http\Controllers;

use App\Authors\Cheers;

class FeedControllerTest extends \TestCase
{
    public function testShow()
    {
        $mock = $this->initMock(Cheers::class);
        $mock->shouldReceive('toXml')->andReturn('123');

        $this->json('get', '/feed/Cheers');
        $this->assertResponseOk();
    }
}
