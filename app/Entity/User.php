<?php
namespace App\Entity;


/**
 * @User
*/
class User
{


       /**
        * @var int
       */
       protected $id;




       /**
        * @var string
       */
       protected $email;




       /**
        * @var string
       */
       protected $username;




       /**
        * @var string
       */
       protected $password;



       /**
        * @var
       */
       protected $address;




       /**
        * @var string
       */
       protected $city;


       /**
        * @var int
       */
       protected $code = '';




       public function __construct()
       {

       }


       public function setCode(int $code): self
       {
           $this->code = $code;

           return $this;
       }


       public function getCode(): int
       {
           return $this->code;
       }




        /**
         * @return int
        */
        public function getId(): int
        {
            return $this->id;
        }



        /**
         * @return string
        */
        public function getEmail(): string
        {
            return $this->email;
        }




        /**
         * @param string $email
         * @return User
        */
        public function setEmail(string $email): User
        {
            $this->email = $email;

            return $this;
        }



        /**
         * @return string
        */
        public function getUsername(): string
        {
            return $this->username;
        }




        /**
         * @param string $username
         * @return User
        */
        public function setUsername(string $username): User
        {
            $this->username = $username;

            return $this;
        }




        /**
         * @return string
        */
        public function getPassword(): string
        {
            return $this->password;
        }



        /**
         * @param string $password
         * @return User
        */
        public function setPassword(string $password): User
        {
            $this->password = $password;

            return $this;
        }




        /**
         * @return mixed
        */
        public function getAddress()
        {
            return $this->address;
        }



        /**
         * @param mixed $address
         * @return User
        */
        public function setAddress($address): User
        {
            $this->address = $address;

            return $this;
        }




        /**
         * @return string
        */
        public function getCity(): string
        {
            return $this->city;
        }




        /**
         * @param string $city
         * @return User
        */
        public function setCity(string $city): User
        {
            $this->city = $city;

            return $this;
        }




        public function prePersist()
        {
             $this->address = 'г.' . $this->city .', '. $this->address;
        }



        public function preRemove()
        {

        }
}
