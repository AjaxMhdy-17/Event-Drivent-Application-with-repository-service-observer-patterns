<?php

namespace App\Service;

use App\Factories\UserFactory;

class UserService
{
    protected $userFactory;

    public function __construct(UserFactory $userFactory)
    {
        $this->userFactory = $userFactory ; 
    }

    public function registerStore($data){
        $user =  $this->userFactory->registerStore($data) ; //factory is just for creating instance and return to service 
        //service will interact with database table 
        return $user->save(); // service will saving data 
    }

}
