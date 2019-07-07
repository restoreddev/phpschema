<?php

namespace PHPSchema\Interfaces;

interface Command
{
	public static function getName(): string;
	public static function getDescription(): string;
	public function run(array $args);	
}
