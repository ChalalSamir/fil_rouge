<?php
namespace App\Controller;

use App\Entity\AccessBus;
use App\Repository\AccessBusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController {


    /**
     * @var AccessBusRepository
     */

    private $repository;

    public function __construct(AccessBusRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/biens" , name="property.index")
     * @return Response
     */


    public function  index() : Response
    {

        $proprety = $this->repository->findAll();
        dump($proprety);
        return $this->render('property/index.html.twig');
    }
}