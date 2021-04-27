<?php


namespace App\Service;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProductService
{
	/**
	 * @var HttpClientInterface
	 */
	private $client;

	/**
	 * ProductService constructor.
	 */
	public function __construct(HttpClientInterface $client)
	{
		$this->client = $client;
	}

	public function fetchProducts() {
		return $this->client->request('GET', 'http://localhost:8081/products')->toArray();
	}
}
