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

    private $bus;

    public function __construct(AccessBusRepository $bus)
    {
        $this->bus = $bus;
    }

    /**
     * @Route("/biens" , name="property.index")
     * @return Response
     */

    public function index() : Response
    {
        $bus = $this->bus->findAll();
        dump($bus);
        return $this->render('property/index.html.twig');
    }


}