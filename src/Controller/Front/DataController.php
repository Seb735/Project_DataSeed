<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    /**
     * @Route("/data_one", name="data_one")
     */
    public function data_one(): Response
    {
        return $this->render('front/data/index.html.twig', [
            'controller_name' => 'DataController',
        ]);
    }
}
