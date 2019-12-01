<?php

namespace Multiples;

class MultipleOf5 extends AbstractMultiple
{
    protected string $message = 'Pong';

    public function __construct()
    {
        parent::__construct($this->message);
    }
}
