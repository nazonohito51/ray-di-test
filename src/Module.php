<?php

declare(strict_types=1);

namespace RayDiTest;

use Ray\Di\AbstractModule;
use RayDiTest\Classes\Customer;
use RayDiTest\Classes\CustomerProvider;
use RayDiTest\Classes\Target1;
use RayDiTest\Classes\Target2;

class Module extends AbstractModule
{
    protected function configure()
    {
        $this->bind(Target1::class);
        $this->bind(Target2::class);
        $this->bind(Customer::class)->toProvider(CustomerProvider::class);
    }
}
