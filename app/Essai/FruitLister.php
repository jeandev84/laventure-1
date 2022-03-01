<?php
namespace App\Essai;


use function dd;

/**
 * @FruitLister
*/
class FruitLister
{
      protected $fruits = [];

      public function __construct(array $fruits)
      {
           $this->fruits = $fruits;
      }



      /**
       * @return string
      */
      public function getFruits(): string
      {
          return implode(',', $this->fruits);
      }
}