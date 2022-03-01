<?php
namespace App\Http\Controller;


use App\Http\Controller\Common\FrontController;
use App\Model\Product;
use App\Repository\UserRepository;
use Laventure\Component\Database\ORM\Builder\Select;
use Laventure\Component\Database\ORM\EntityManager;
use Laventure\Component\Http\Request\Request;
use Laventure\Component\Http\Response\Response;
use Laventure\Foundation\Service\Cache\Contract\CacheInterface;


/**
 * @SiteController
*/
class SiteController extends FrontController
{


    /**
     * @var EntityManager
    */
    protected $em;



    /**
     * @param EntityManager $em
    */
    public function __construct(EntityManager $em)
    {
          $this->em = $em;
    }


    /**
     * @param Request $request
     * @param UserRepository $repository
     * @return Response
     * @throws \Exception
    */
    public function home(Request $request, UserRepository $repository): Response
    {

        $connection = $this->em->getConnectionManager();
        $columns = $connection->showTableColumns('users');

        // dd($columns);

        return $this->render('site/home.php');
    }


    /**
     * @param Request $request
     * @param CacheInterface $cache
     * @return Response
    */
    public function about(Request $request, CacheInterface $cache): Response
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



    public function fixturesUsers()
    {

        /*
        for ($i = 0; $i <= 10; $i++) {

            $user = new User();
            $user->setEmail('user'. $i .'@gmail.com')
                ->setUsername('user'. $i)
                ->setPassword(password_hash('123', PASSWORD_DEFAULT))
                ->setAddress('Golovinskoe shosse dom 8 k 2a')
                ->setCity('Moscow'. $i)
                ->setCode($i)
            ;


            $this->em->persist($user);
        }


        $this->em->flush();


        /** @var User $user */
        /*
        $user = $repository->findOneBy(['id' => 15]);

        $user->setEmail('jeanyao@ymail.com')
             ->setUsername('jean')
             ->setAddress('Головинское шоссе дом 8 к 2а')
             ->setCity('Москва')
             ->setCode(77)
        ;

        $this->em->flush();
        */
    }




    protected function selectTesting()
    {
        $qb = new Select();

        $qb->from('users', 'u')
            //->join('products', 'u.product_id = products.id')
            //->join('files', 'u.file_id = files.id')
            //->innerJoin('files', 'u.file_id = files.id')
            ->fullOuterJoin('products', 'u.products_id = products.id')
            ->leftJoin('products', 'u.products_id = products.id')
            ->rightJoin('regions', 'u.region_id = region.id')
            ->orderBy('u.id', 'asc')
            ->orderBy('u.username', 'desc')
            ->addOrderBy('u.code asc')
        ;

        dd($qb->getSQL());
    }




    protected function seedTesting()
    {
        /* $users = $repository->findAll(); dd($users); */

        /*
        $user = new User();
        $user->setEmail('micha@gmail.com')
            ->setUsername('micha')
            ->setPassword(password_hash('123', PASSWORD_DEFAULT))
            ->setAddress('Golovinskoe shosse dom 8 k 2a')
            ->setCity('Moscow')
            ->setCode(77)
        ;
        $this->em->persist($user);
        $this->em->flush();
        $product = new Product();
        $product['title'] = 'Product2';
        $product['price'] = '25';
        $product['description'] = 'Good product 2';
        $product['featured'] = true;
        $product->save();
        */

        // dd(Product::all());
        /*
        $product = Product::find(3);
        $product['title'] = 'Iphone 4';
        $product['price'] = 248;
        $product['description'] = 'Good product 3 updated!';
        $product['featured'] = 0; // boolean (true = 1, false = 0)
        $product->save();


        $product = Product::find(10);

        //$product = new Product();

        $product['title'] = 'BMW 3';
        $product['price'] = 24889;
        $product['description'] = 'Very powerful BMV new version!';
        $product['featured'] = 0; // boolean (true = 1, false = 0)

        $product->save();
        */


        /*
      $qb = new Select();

      $qb->from('users', 'u')
          //->join('products', 'u.product_id = products.id')
          //->join('files', 'u.file_id = files.id')
          //->innerJoin('files', 'u.file_id = files.id')
          //->fullOuterJoin('products', 'u.products_id = products.id')
          //->leftJoin('products', 'u.products_id = products.id')
          ->rightJoin('regions', 'u.region_id = region.id')
          ->orderBy('u.id', 'asc')
          ->orderBy('u.username', 'desc')
          ->addOrderBy('u.code asc');

      dd($qb->getSQL());
      */

    }
}