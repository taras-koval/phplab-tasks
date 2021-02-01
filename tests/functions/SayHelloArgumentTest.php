<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentTest extends TestCase
{
	/**
	 * @dataProvider positiveDataProvider
	 */
	public function testPositive($input, $expected)
	{
		$this->assertEquals($expected, sayHelloArgument($input));
	}

	public function positiveDataProvider()
	{
		return [
			['world!', 'Hello world!'],
			['Taras', 'Hello Taras'],
			['php', 'Hello php'],
		];
	}
}