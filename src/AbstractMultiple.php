<?php

namespace Multiples;

abstract class AbstractMultiple implements MultipleInterface
{
    protected string $message;
    protected OutputInterface $output;

    public function __construct(string $message, OutputInterface $output = null)
    {
        $this->message = $message;
        $this->output = $output ?: new Output();
    }

    public function output()
    {
        return $this->output->write($this->message);
    }
}