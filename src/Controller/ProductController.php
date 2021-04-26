<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
	/**
	 * @Route("/", name="app_homepage")
	 * @return Response
	 */
	public function index() : Response
	{
		return $this->render('product/index.html.twig');
	}

	/**
	 * @Route ("/catalog", name="app_catalog")
	 * @return Response
	 */
	public function catalog(): Response
	{
		return $this->render('product/catalog.html.twig');
	}
}