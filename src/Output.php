<?php

namespace Multiples;

class Output implements OutputInterface
{
    public function write(string $message): string
    {
        return $message;
    }
}
