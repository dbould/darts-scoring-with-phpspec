<?php

namespace spec\Service;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DartboardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Service\Dartboard');
    }

    function it_has_segments()
    {
        $this->getSegments()->shouldBeArray();
    }
}
