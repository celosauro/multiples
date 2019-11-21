<?php

namespace Multiples;

class MultipleOf3 extends AbstractMultiple
{
    protected $output = 'Ping';

    public function __construct()
    {
        parent::__construct($this->output);
    }
}
