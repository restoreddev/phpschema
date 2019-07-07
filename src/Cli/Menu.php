<?php

namespace PHPSchema\Cli;

class Menu
{
	const COMMANDS = [
		\PHPSchema\Cli\Commands\Generate::class,
		\PHPSchema\Cli\Commands\Migrate::class,
	];

	public function display()
	{
		echo "Usage: phpschema [commands] [options]\n";
		foreach (self::COMMANDS as $command) {
			$name = $command::getName();
			$description = $command::getDescription();

			echo "    $name\t$description\n";
		}
	}	

	public function find($name)
	{
		foreach (self::COMMANDS as $command) {
			if ($command::getName() === $name) {
				return new $command;
			}

			return null;
		}
	}
}
