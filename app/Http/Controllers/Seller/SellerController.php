<?php

namespace App\Http\Controllers\Seller;


use App\Http\Controllers\ApiController;
use App\Seller;

class SellerController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $sellers = Seller::has('products')->get();

        return $this->showAll($sellers);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Seller $seller)
    {
        //$seller = Seller::has('products')->findOrFail($id);

        return $this->showOne($seller);
    }


}
