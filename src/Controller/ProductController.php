<?php

namespace App\Controller;

use App\Entity\Product;
use App\Service\ProductService;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ProductController extends AbstractController
{
    /**
     * @var ProductService
     */
    private $productService;

    /**
     * ProductController constructor.
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @Route("/", name="app_homepage")
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig');
    }

    /**
     * @Route ("/catalog", name="app_catalog")
     *
     * @return Response
     */
    public function catalog(SerializerInterface $serializer): Response
    {
        $products = $this->productService->fetchProducts();
        $collection = new ArrayCollection();
        foreach ($products['_embedded']['products'] as $value) {
            $item = $serializer->deserialize(json_encode($value), Product::class, 'json');
            dump($item);

            //$collection->add($product);*/
        }

        return $this->render('product/catalog.html.twig');
    }
}
