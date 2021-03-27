<?php

namespace App\Http\Controllers\Api;

use App\Repositories\ProductRepository;
use App\Http\Resources\ProductCollection;

class ProductController
{
    private $product;

    public function __construct(ProductRepository $product)
    {
        $this->product = $product;
    }

    public function getProductList()
    {
        return new ProductCollection($this->product->getProductList());
    }
}
