<?php

namespace Dvit\RandomProcesses\Tests;

use Dvit\RandomProcesses\StuffFactory;
use PHPUnit\Framework\TestCase;

class StuffFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_stuff()
    {
        $stuffs = new StuffFactory([
            'This is a stuff',
        ]);

        $stuff = $stuffs->getRandomStuff();

        $this->assertSame('This is a stuff', $stuff);
    }

    /** @test */
    public function it_returns_a_predefined_stuff()
    {
        $stuffOnBalls = [
            'Random Stuff For Basketball',
            'Random Stuff For Baseball',
            'Random Stuff For Volleyball',
        ];

        $stuffs = new StuffFactory();

        $stuff = $stuffs->getRandomStuff();

        $this->assertContains($stuff, $stuffOnBalls);
    }
}
