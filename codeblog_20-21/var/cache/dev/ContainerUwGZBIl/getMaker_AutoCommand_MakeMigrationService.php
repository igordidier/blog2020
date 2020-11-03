<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'maker.auto_command.make_migration' shared service.

include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Command\\MakerCommand.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\MakerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\AbstractMaker.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\ApplicationAwareMakerInterface.php';
include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\maker-bundle\\src\\Maker\\MakeMigration.php';

$this->privates['maker.auto_command.make_migration'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeMigration(\dirname(__DIR__, 4)), ($this->privates['maker.file_manager'] ?? $this->load('getMaker_FileManagerService.php')), ($this->privates['maker.generator'] ?? $this->load('getMaker_GeneratorService.php')));

$instance->setName('make:migration');

return $instance;
