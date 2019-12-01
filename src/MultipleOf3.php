<?php

namespace Multiples;

class MultipleOf3 extends AbstractMultiple
{
    protected string $message = 'Ping';

    public function __construct()
    {
        parent::__construct($this->message);
    }
}
