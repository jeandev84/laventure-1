<?php
namespace App\Console\Command;


use Laventure\Component\Console\Command\Command;
use Laventure\Component\Console\Input\Contract\InputInterface;
use Laventure\Component\Console\Output\Contract\OutputInterface;


/**
 * @ChangePasswordCommand
*/
class ChangePasswordCommand extends Command
{
      protected $name = 'app:user:change-password';


      /**
       * @param string|null $name
      */
      public function __construct(string $name = null)
      {
            parent::__construct($name);
      }




      protected function execute(InputInterface $input, OutputInterface $output): int
      {
            return Command::SUCCESS;
      }
}