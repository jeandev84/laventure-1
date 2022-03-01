<?php
namespace App\Console;


use App\Console\Command\ChangePasswordCommand;
use Laventure\Foundation\Console\Kernel as ConsoleKernel;




/**
 * @Kernel
*/
class Kernel extends ConsoleKernel
{

    /**
     * @var string[]
    */
    protected $commands = [
        ChangePasswordCommand::class
    ];
}