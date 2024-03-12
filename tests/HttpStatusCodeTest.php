<?php

namespace Nullform\Tests;

use Nullform\HttpStatusCode;
use PHPUnit\Framework\TestCase;

class HttpStatusCodeTest extends TestCase
{
    public function testGetCode()
    {
        $statusCode = new HttpStatusCode(200);

        $this->assertTrue($statusCode->getCode() === 200);
        $this->assertTrue((string)$statusCode === '200');
    }

    public function testGetReason()
    {
        $statusCode = new HttpStatusCode(200);

        $this->assertEquals('OK', $statusCode->getReason());
    }

    public function testGetDescription()
    {
        $statusCode = new HttpStatusCode(200);

        $this->assertNotEmpty($statusCode->getDescription());
    }

    public function testIsInformational()
    {
        $status100 = new HttpStatusCode(100);
        $status201 = new HttpStatusCode(201);

        $this->assertTrue($status100->isInformational());
        $this->assertFalse($status201->isInformational());
    }

    public function testIsSuccessful()
    {
        $status100 = new HttpStatusCode(100);
        $status201 = new HttpStatusCode(201);

        $this->assertFalse($status100->isSuccessful());
        $this->assertTrue($status201->isSuccessful());
    }

    public function testIsRedirection()
    {
        $status100 = new HttpStatusCode(100);
        $status301 = new HttpStatusCode(301);

        $this->assertTrue($status301->isRedirection());
        $this->assertFalse($status100->isRedirection());
    }

    public function testIsClientError()
    {
        $status100 = new HttpStatusCode(100);
        $status404 = new HttpStatusCode(404);

        $this->assertTrue($status404->isClientError());
        $this->assertFalse($status100->isClientError());
    }
    public function testIsServerError()
    {
        $status100 = new HttpStatusCode(100);
        $status500 = new HttpStatusCode(500);

        $this->assertTrue($status500->isServerError());
        $this->assertFalse($status100->isServerError());
    }
}
