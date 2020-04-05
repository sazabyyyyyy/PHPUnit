<?php

class Message
{

    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function get(): string
    {
        return $this->message;
    }
}
