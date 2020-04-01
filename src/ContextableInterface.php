<?php

namespace Pioniro\ContextableException;

interface ContextableInterface
{
    /**
     * @return array|iterable
     */
    public function getContext();

    /**
     * @param array|iterable $context
     * @return static
     */
    public function addContext($context);
}