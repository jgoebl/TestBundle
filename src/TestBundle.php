<?php

namespace JGoebl\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TestBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
