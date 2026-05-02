<?php

class User
{
    private string $name;
    private string $email;
    private int $age;

    public function __construct(string $name, string $email, int $age)
    {
        $this->name  = $name;
        $this->email = $email;
        $this->age   = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function getAge(): int
    {
        return $this->age;
    }

    public function isValidEmail(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }
}