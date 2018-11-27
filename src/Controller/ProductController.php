<?php

namespace App\Controller;

use App\Repository\AlcoholRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Alcohol;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="product")
     */
    public function index(Request $request, $productId = 0)
    {
        $alcoholRepository = new AlcoholRepository();
        $alcohol = $alcoholRepository->findOneById($productId);

        return $this->render('product/index.html.twig', [
            'alcohol' => $alcohol,
        ]);
    }
}
