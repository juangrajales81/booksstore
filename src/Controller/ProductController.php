<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProductController extends AbstractController
{
    /**
     *  @Route("/product")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('product/number.html.twig', [
            'number' => $number,
        ]);
    }
}
