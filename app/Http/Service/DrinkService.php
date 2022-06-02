<?php
namespace App\Http\Service;

use App\Models\Drink;

class DrinkService extends AbstractService
{
    public function __construct()
    {
        $this->model = new Drink;
    }
}