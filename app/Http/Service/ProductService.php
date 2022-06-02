<?php

namespace App\Http\Service;

use App\Models\Product;

class ProductService extends AbstractService
{
    
    public function __construct()
    {
        $this->model = new Product;
    }
}