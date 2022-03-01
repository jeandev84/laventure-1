<?php
namespace App\Http\Controller;


use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;
use Laventure\Foundation\Routing\Controller;


/**
 * @SiteController
*/
class SiteController extends Controller
{

    /**
     * @param Request $request
     * @return Response
     * @throws \Exception
    */
    public function home(Request $request): Response
    {
        return $this->render('site/home.php');
    }


    /**
     * @param Request $request
     * @return Response
    */
    public function about(Request $request): Response
    {
        return $this->render('site/about.php');
    }




    /**
     * @param Request $request
     * @return Response
    */
    public function contact(Request $request): Response
    {
        return $this->render('site/contact.php');
    }
}