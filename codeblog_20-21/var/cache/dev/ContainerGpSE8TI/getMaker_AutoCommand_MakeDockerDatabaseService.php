<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_docker_database' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeDockerDatabase.php';

$a = ($this->privates['maker.file_manager'] ?? $this->load('getMaker_FileManagerService.php'));

$this->privates['maker.auto_command.make_docker_database'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeDockerDatabase($a), $a, ($this->privates['maker.generator'] ?? $this->load('getMaker_GeneratorService.php')));

$instance->setName('make:docker:database');

return $instance;
