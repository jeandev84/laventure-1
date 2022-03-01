<?php
namespace App\Service;


use App\Entity\User;

/**
 * @UserService
*/
class UserService
{
     public function makeInformation(User $user): string
     {
         return $user->getCity() .' - '. $user->getAddress();
     }
}