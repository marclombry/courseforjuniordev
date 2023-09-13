<?php

namespace MyApp\Core\Model;

use Exception;

class User
{
    private readonly string $name;

    /**
     * @param string $name
     * @throws Exception
     */
    public function __construct(string $name)
    {
        if (!$name) {
            throw new Exception("error, User name is empty");
        }
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}