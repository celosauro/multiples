<?php

namespace Multiples;

abstract class AbstractMultiple
{
    protected $output;

    public function __construct($output)
    {
        $this->output = $output;
    }

    public function output(): string
    {
        return $this->output;
    }
}