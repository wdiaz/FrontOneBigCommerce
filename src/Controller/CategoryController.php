<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("c/", name="category_index")
     */
    public function index(): Response
    {
        //return $this->render('category/index.html.twig');
	    return new Response('categories');
    }
}
