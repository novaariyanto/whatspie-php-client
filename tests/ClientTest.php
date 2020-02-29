<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ClientTest extends TestCase
{
    protected $client;
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->client = new \Whatspie\Client(API_TOKEN, DEVICE);

    }

    public function testCanSendingMessage()
    {


        $this->assertTrue($this->client->to('6285603051722')->message("Hi there this is from unit testing\n*This is Bold message*")->send());
    }

    public function testCanGetMessages()
    {
        $this->assertTrue(is_array((array) $this->client->getMessages()));
    }
}



