<?php
namespace App\Repository;



use App\Entity\User;
use App\Service\UserService;
use Laventure\Component\Database\ORM\EntityManager;
use Laventure\Component\Database\ORM\Repository\ServiceRepository;


/**
 * @UserRepository
*/
class UserRepository extends ServiceRepository
{


       /**
        * @var UserService
       */
       protected $service;





       /**
         * @param EntityManager $em
         * @param UserService $service
       */
       public function __construct(EntityManager $em, UserService $service)
       {
            parent::__construct($em, User::class);
            $this->service = $service;
       }


       /**
        * @return string
       */
       public function getSomething(): string
       {
            return $this->service->makeInformation(new User());
       }

}