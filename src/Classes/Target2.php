<?php

declare(strict_types=1);

namespace RayDiTest\Classes;

use Ray\Di\Di\Assisted;

class Target2
{
    public function __construct(
        private Target1 $target1
    )
    {

    }

    public function doSomething(
        int $id,
        #[Assisted] Customer $customer = null
    )
    {
        echo $customer->getId();
    }
}