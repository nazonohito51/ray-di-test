<?php

declare(strict_types=1);

namespace RayDiTest\Classes;

use Ray\Di\MethodInvocationProvider;
use Ray\Di\ProviderInterface;

class CustomerProvider implements ProviderInterface
{
    public function __construct(
        private MethodInvocationProvider $invocationProvider)
    {
    }

    public function get()
    {
        $parameters = $this->invocationProvider->get()->getArguments()->getArrayCopy();
        list($id) = $parameters;

        return new Customer($id);
    }
}