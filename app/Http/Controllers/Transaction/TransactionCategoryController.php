<?php

namespace App\Http\Controllers\Transaction;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class TransactionCategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\jsonResponse
     */
    public function index(Transaction $transaction)
    {
//        dd($transaction->product);
        $categories = $transaction->product->categories;

        return $this->showAll($categories);
    }


}
