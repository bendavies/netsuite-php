<?php

namespace spec\Fungku\NetSuite;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NetSuiteServiceSpec extends ObjectBehavior
{
    function let(\SoapClient $client)
    {
        $config = require __DIR__.'/../samples/config.php';

        $this->beConstructedWith($config, [], $client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Fungku\NetSuite\NetSuiteService');
    }
}
