<?php

class LoginTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testLoginUrl()
	{

		$response = $this->call('GET', '/login');
		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testValidLogin()
	{

		$this->visit('GET','/login')
		->press('Login')
		->seePageIs('/login');
	}

	public function testCheckValidUser()
	{

		$this->visit('GET','/login')
		->type('devi@gmail.com','email')
		->type('devidevi','password')
		->press('Login')
		->seePageIs('/home');
	}

	public function testCheckInValidUser()
	{

		$this->visit('GET','/login')
		->type('deviwrong@gmail.com','email')
		->type('devidevi','password')
		->press('Login')
		->seePageIs('/login');
	}

	public function testDoValidation()
	{

		$this->visit('GET','/login')
		->type('deviwrong','email')
		->type('devidevi','password')
		->press('Login')
		->seePageIs('/login');
	}

}
