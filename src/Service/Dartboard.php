<?php

namespace Service;


class Dartboard
{
    private $segments;
    private $multiplier;

    public function __construct()
    {
        $this->setSegments();

    }

    public function setSegments()
    {
        $this->segments = [
            20,
            1,
            18,
            4,
            13,
            6,
            10,
            15,
            2,
            17,
            3,
            19,
            7,
            16,
            8,
            11,
            14,
            9,
            12,
            5,
            25
        ];
    }

    public function setMultiplier()
    {

    }

    public function getSegments()
    {
        return $this->segments;
    }
}