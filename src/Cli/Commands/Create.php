<?php

namespace PHPSchema\Cli\Commands;

class Create implements \PHPSchema\Interfaces\Command
{
	public static function getName(): string
	{
		return 'create';
	}

	public static function getDescription(): string
	{
		return 'Generates new migration files';
	}

	public function run(array $args)
	{
		$migrationName = $args[0] ?? null;
		if (!$migrationName) {
			echo "Please pass a name for the migration\n";
		}

		if (!file_exists('migrations')) {
			mkdir('migrations');
		}

		$dir = 'migrations/' . time() . "_$migrationName";
		mkdir($dir);

		touch($dir . "/up.sql");
		touch($dir . "/down.sql");
	}
}
