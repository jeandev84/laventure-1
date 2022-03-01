<?php
namespace App\Essai;

/**
 * @FruitRender
*/
class FruitRender
{


     /**
      * @var FruitLister
     */
     protected $lister;




     /**
      * @var string
     */
     protected $version;




     /**
      * @param FruitLister $lister
      * @param string $version
     */
     public function __construct(FruitLister $lister, string $version)
     {
         $this->lister = $lister;
         $this->version = $version;
     }




     /**
      * @return string
     */
     public function getMessage(): string
     {
         return "Message from class ". get_class($this) ." at version {$this->version} has list [{$this->lister->getFruits()}]";
     }
}