<?php

require_once __DIR__ . '/vendor/autoload.php';

$module = new \RayDiTest\Module();
$injector = new \Ray\Di\Injector($module);

/** @var \RayDiTest\Classes\Target2 $target2 */
$target2 = $injector->getInstance(\RayDiTest\Classes\Target2::class);
$target2->doSomething(5);
