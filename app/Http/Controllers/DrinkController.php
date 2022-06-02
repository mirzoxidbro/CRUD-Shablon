<?php

namespace App\Http\Controllers;

use App\Http\Service\DrinkService;
use App\Http\Requests\Drink\DrinkStoreRequest;
use App\Http\Requests\Drink\DrinkUpdateRequest;

class DrinkController extends AbstractCRUDController
{
    public function __construct()
    {
        $this->service = new DrinkService;
        $this->storeRequestClass = DrinkStoreRequest::class; 
        $this->updateRequestClass = DrinkUpdateRequest::class; 
    }
}
