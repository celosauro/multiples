<?php

namespace Multiples;

class MultipleOf5 extends AbstractMultiple
{
    protected $output = 'Pong';

    public function __construct()
    {
        parent::__construct($this->output);
    }
}
