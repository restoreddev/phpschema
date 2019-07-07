<?php

namespace PHPSchema\Cli\Commands;

class Generate implements \PHPSchema\Interfaces\Command
{
	public static function getName(): string
	{
		return 'generate';
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

		$file = $dir . "/up.sql";
		touch($file);
		echo "Created $file\n";

		$file = $dir . "/down.sql";
		touch($file);
		echo "Created $file\n";
	}
}
