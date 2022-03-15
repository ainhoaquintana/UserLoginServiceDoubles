<?php

namespace UserLoginService\Domain;

class User
{
    private string $userName;


    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }
}