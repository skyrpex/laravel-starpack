<?php

namespace Skyrpex\Starpack\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class ViewTest extends TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testAbc()
    {
        $this->assertEquals(0, 1);
    }
}
