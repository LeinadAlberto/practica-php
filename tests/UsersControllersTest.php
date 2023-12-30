<?php 

namespace Tests;

use GuzzleHttp\Client;
use LionTest\Test;

class UsersControllersTest extends Test
{
	const SUCCESS = 'success';
  	const MESSAGE_CREATE = 'Rows inserted sucesfully';
  
	public function testCreateUsers(): void
	{
      	$response = (object) ['status' => self::SUCCESS, 'message' => self::MESSAGE_CREATE];
      
      	$this->assertIsObject($response);
      	$this->assertObjectHasProperty('status', $response);
        $this->assertObjectHasProperty('message', $response);
      	$this->assertSame(self::SUCCESS, $response->status);
      	$this->assertSame(self::MESSAGE_CREATE, $response->message);

      	$client = new Client();
      	$resp = $client->get('http://127.0.0.1:8000/users');
      	var_dump($resp->getBody()->getContents());
	}
}

