<?php

namespace App\Controller;

use App\Entity\Peinture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PeinturesController extends AbstractController
{
    /**
     * @Route("/peintures", name="peintures")
     */
    public function index()
    {
        return $this->render('peintures/index.html.twig', [
            'controller_name' => 'PeinturesController',
        ]);   
    }

    /**
     * @Route("/", name="home")
     */
    public function home() 
    {
        return $this->render('peintures/home.html.twig');
    }

    /**
     * @Route("/peintures/new", name="peintures_new")
     */
    public function create(Request $request) {
        dump($request);

        if($request->request->count() > 0) {
            $peinture = new Peinture();
            
        }

        return $this->render('peintures/create.html.twig');
    }
}
