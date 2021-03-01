<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    /**
     * @Route("/dataOne", name="data_one")
     */
    public function dataOne(): Response
    {
        $titlePage = 'Data One';

        return $this->render('front/data/data.html.twig', [
            'title' => $titlePage
        ]);
    }

    /**
     * @Route("/dataTwo", name="data_two")
     */
    public function dataTwo(): Response
    {
        $titlePage = 'Data Two';

        return $this->render('front/data/data.html.twig', [
            'title' => $titlePage
        ]);
    }

    /**
     * @Route("/dataThree", name="data_three")
     */
    public function dataThree(): Response
    {
        $titlePage = 'Data Three';
        
        return $this->render('front/data/data.html.twig', [
            'title' => $titlePage
        ]);
    }

    /**
     * @Route("/dataFour", name="data_four")
     */
    public function dataFour(): Response
    {
        $titlePage = 'Data Four';
        
        return $this->render('front/data/data.html.twig', [
            'title' => $titlePage
        ]);
    }
}
