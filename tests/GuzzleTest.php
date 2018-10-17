<?php

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class GuzzleTest extends TestCase
{
    public function testGet()
    {
        $client = new Client([
            'base_uri' => 'https://httpbin.org',
            'headers' => [
                'accept' => 'application/json'
            ],
        ]);
        $response = $client->request('GET');
        $statusCode = $response->getStatusCode();
        $this->assertEquals(200, $statusCode);
    }
}
