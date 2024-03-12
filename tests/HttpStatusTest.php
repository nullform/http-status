<?php

namespace Nullform\Tests;

use Nullform\HttpStatus;
use PHPUnit\Framework\TestCase;

class HttpStatusTest extends TestCase
{
    public function testIsInformational()
    {
        for ($i = 100; $i < 199; $i++) {
            $this->assertTrue(HttpStatus::isInformational($i));
        }
    }

    public function testIsSuccessful()
    {
        for ($i = 200; $i < 299; $i++) {
            $this->assertTrue(HttpStatus::isSuccessful($i));
        }
    }

    public function testIsRedirection()
    {
        for ($i = 300; $i < 399; $i++) {
            $this->assertTrue(HttpStatus::isRedirection($i));
        }
    }

    public function testIsClientError()
    {
        for ($i = 400; $i < 499; $i++) {
            $this->assertTrue(HttpStatus::isClientError($i));
        }
    }

    public function testIsServerError()
    {
        for ($i = 500; $i < 599; $i++) {
            $this->assertTrue(HttpStatus::isServerError($i));
        }
    }

    public function testGetAllReasons()
    {
        $all = HttpStatus::getAllReasons();

        $this->assertTrue(\is_array($all));
        $this->assertNotEmpty($all);
        $this->assertTrue($all[200] === 'OK');
    }

    public function testGetReason()
    {
        $this->assertEquals('OK', HttpStatus::getReason(200));
        $this->assertTrue(HttpStatus::getReason(999999) === '');
        $this->assertTrue(HttpStatus::getReason('999') === '');
        $this->assertTrue(HttpStatus::getReason('200') === 'OK');
    }

    public function testGetDescription()
    {
        $this->assertNotEmpty(HttpStatus::getDescription(200));
    }

    public function testGetAllDescriptions()
    {
        $all = HttpStatus::getAllDescriptions();

        $this->assertTrue(\is_array($all));
        $this->assertNotEmpty($all);
    }
}
