<?php

namespace App\Factories;

use App\Models\User;

class UserFactory
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function registerStore($data)
    {
        // return User::create($data);
        return new User($data) ; //creating an instance only and retuning to service 
    }
}
