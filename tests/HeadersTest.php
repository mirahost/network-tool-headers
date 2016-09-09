<?php

use Mirahost\NetworkTools\Headers;

class HeadersTest extends PHPUnit_Framework_TestCase {

    public function testHeaders()
    {
        $Headers = new Headers;
        $this->assertContains('HTTP', $Headers->getHeaders('http://www.example.com'));
    }

}