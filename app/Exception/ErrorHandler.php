<?php
namespace App\Exception;


use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;
use Laventure\Contract\Debug\ExceptionHandler;
use Throwable;


/**
 * @ErrorHandler
 */
class ErrorHandler implements ExceptionHandler
{

    /**
     * @inheritDoc
    */
    public function report(Throwable $e)
    {
        // TODO: Implement report() method.
    }

    /**
     * @inheritDoc
     */
    public function renderException(Request $request, Throwable $e): Response
    {
        // TODO: Implement renderException() method.
    }

    /**
     * @inheritDoc
     */
    public function renderConsoleException($output, Throwable $e)
    {
        // TODO: Implement renderConsoleException() method.
    }
}