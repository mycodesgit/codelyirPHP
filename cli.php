#!/usr/bin/env php
<?php

// cli.php

require_once __DIR__ . '/vendor/autoload.php'; // Include Composer's autoloader

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

$app = new Application('My CLI App');

// Define the generate:function command
$app->register('generate:function')
    ->setDefinition([
        new InputArgument('name', InputArgument::REQUIRED, 'The name of the function'),
    ])
    ->setDescription('Generate a new function file')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $functionName = $input->getArgument('name');
        $functionContent = <<<'PHP'
<?php

/*
|--------------------------------------------------------------------------
| Function Management
|--------------------------------------------------------------------------
|
| Here is where you can add all the functions for your application. These
| functions are connected by the corresponding table within your Database which
| is assigned in every "pages" group. Enjoy building your Functions!
|
*/

if (!defined('ACCESS')) {
    die('DIRECT ACCESS NOT ALLOWED');
}
 
function view() {
    global $DB;
}

function create() {
    global $DB;
}

function update() {
    global $DB;
}

function delete() {
    global $DB;
}

PHP;

        $filePath = __DIR__ . '/app/functions/' . $functionName . '.php';

        // Check if the file already exists
        if (file_exists($filePath)) {
            $output->writeln("Function file already exists.");
        } else {
            // Create the function file
            if (file_put_contents($filePath, $functionContent)) {
                $output->writeln("Function file created successfully.");
            } else {
                $output->writeln("Failed to create function file.");
            }
        }
    });

// Define the generate:action command
$app->register('generate:action')
    ->setDefinition([
        new InputArgument('name', InputArgument::REQUIRED, 'The name of the action'),
    ])
    ->setDescription('Generate a new action file')
    ->setCode(function (InputInterface $input, OutputInterface $output) {
        $actionName = $input->getArgument('name');
        $actionContent = <<<'PHP'
<?php

/*
|--------------------------------------------------------------------------
| Actions Management
|--------------------------------------------------------------------------
|
| Here is where you can add all the actions for your application. These
| actions are connected by the corresponding functions within your "app/functions" folder which
| is assigned in every "pages" group. Enjoy building your Actions!
|
*/

if (!defined('ACCESS')) {
    die('DIRECT ACCESS NOT ALLOWED');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    validate_csrf_token();

    if (isset($_POST['btn-submit'])) {

        create();
        // Redirect or perform additional actions as needed
    }

    if (isset($_POST['btn-update'])) {

        update();
        // Redirect or perform additional actions as needed
    }

    if (isset($_POST['btn-delete'])) {
        //$token = $_GET['token'];

        delete();
        // Redirect or perform additional actions as needed
    }
}

PHP;

        $filePath = __DIR__ . '/actions/' . $actionName . '.php';

        // Check if the file already exists
        if (file_exists($filePath)) {
            $output->writeln("Action file already exists.");
        } else {
            // Create the action file
            if (file_put_contents($filePath, $actionContent)) {
                $output->writeln("Action file created successfully.");
            } else {
                $output->writeln("Failed to create action file.");
            }
        }
    });

$app->run();
