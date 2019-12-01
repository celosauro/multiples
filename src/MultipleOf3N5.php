<?php

namespace Multiples;

class MultipleOf3N5 extends AbstractMultiple
{
    protected string $message = 'Ping Pong';

    public function __construct()
    {
        parent::__construct($this->message);
    }
}
