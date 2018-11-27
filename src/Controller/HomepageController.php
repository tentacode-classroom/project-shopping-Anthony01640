<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AlcoholRepository;

Class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(){
        $alcoholRepository = new AlcoholRepository();
        $alcohols = $alcoholRepository->findAll();
        return $this->render('homepage.html.twig', [
            'alcohols' => $alcohols,
        ]);
    }

}