<?php

namespace App\Http\Controllers\Product;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class ProductBuyerController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index(Product $product)
    {
        $buyers = $product->transactions()
            ->whereHas('buyer')
            ->with('buyer')
            ->get()
            ->pluck('buyer')
            ->unique('id')
            ->values();


        return $this->showAll($buyers);
    }


}
