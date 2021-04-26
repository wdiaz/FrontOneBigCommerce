<?php

namespace App\Factory;

use App\Entity\Product;
use Zenstruck\Foundry\ModelFactory;

/**
 * Class ProductFactory.
 */
class ProductFactory extends ModelFactory
{
    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->unique()->name(),
            'sku' => self::faker()->regexify('[A-Z]{5}[0-4]{3}'),
            'shortDescription' => self::faker()->sentence(5),
            'longDescription' => self::faker()->sentence(50),
            'activeStartDate' => self::faker()->dateTime(),
            'activeEndDate' => self::faker()->dateTime(),
	        'manufacturer' => self::faker()->regexify('[A-Z]{5}'),
            'createdAt' => self::faker()->dateTime(),
            'updatedAt' => self::faker()->dateTime(),
            'isDownload' => self::faker()->boolean(),
            'isPublished' => self::faker()->boolean(),
            'metaTitle' => self::faker()->sentence(5),
            'metaDescription' => self::faker()->sentence(20),
            'canonicalUrl' => self::faker()->url(),
            'isPromoted' => self::faker()->boolean(),
        ];
    }

    protected function initialize()
    {
        return $this;
    }

    protected static function getClass(): string
    {
        return Product::class;
    }
}
