<?php

namespace PHPSchema\Cli\Commands;

class Migrate implements \PHPSchema\Interfaces\Command
{
	public static function getName(): string
	{
		return 'migrate';
	}

	public static function getDescription(): string
	{
		return 'Run migrations on database';
	}

	public function run(array $args)
	{

	}
}
