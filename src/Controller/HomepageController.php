<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

Class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(){
        return $this->render('homepage.html.twig');
    }

}