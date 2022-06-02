<?php

namespace App\Http\Controllers;

use App\Http\Service\ProductService;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;

class ProductController extends AbstractCRUDController
{

    public function __construct()
    {
        $this->service = new ProductService;
        $this->storeRequestClass = ProductStoreRequest::class; 
        $this->updateRequestClass = ProductUpdateRequest::class; 
    }

}
