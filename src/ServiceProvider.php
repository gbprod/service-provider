<?php

namespace Interop\Container\ServiceProvider;

interface ServiceProvider
{
    /**
     * @return array
     */
    public function getServices();
}
