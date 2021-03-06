<?php

namespace Dvit\RandomProcesses;

// 2.0.0

class StuffFactory
{
    protected $stuffs = [
        'Random Stuff For Basketball Elite',
        'Random Stuff For Baseball',
        'Random Stuff For Volleyball',
    ];

    public function __construct(array $stuffs = null)
    {
        if ($stuffs) {
            $this->stuffs = $stuffs;
        }
    }

    public function getRandomStuff()
    {
        return $this->stuffs[array_rand($this->stuffs)];
    }
}
