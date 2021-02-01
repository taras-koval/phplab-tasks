<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
{
	/**
	 * @dataProvider positiveDataProvider
	 */
	public function testPositive($expected, ...$args)
	{
		$this->assertEquals($expected, countArguments(...$args));
	}

	public function positiveDataProvider()
	{
		return [
			[
				[
					'argument_count' => null, 
				 	'argument_values' => []
				 ],
			],
			[
				[
					'argument_count' => 1, 
					'argument_values' => [0 => "one"]
				],
				"one"
			],
			[
				[
					'argument_count' => 2, 
					'argument_values' => [0 => "one", 1 => "two"]
				],
				"one", "two"
			]
		];
	}
}