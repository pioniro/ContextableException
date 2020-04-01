<?php

namespace Pioniro\ContextableException;

trait ContextableTrait
{
    protected $_context = [];

    /**
     * @return array|iterable
     */
    public function getContext() {
        return $this->_context;
    }

    /**
     * @param array|iterable $context
     * @return static
     */
    public function addContext($context) {
        $this->_context = array_merge($this->_context, $context);
        return $this;
    }
}