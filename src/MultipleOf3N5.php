<?php

namespace Multiples;

class MultipleOf3N5 extends AbstractMultiple
{
    protected $output = 'Ping Pong';

    public function __construct()
    {
        parent::__construct($this->output);
    }
}
