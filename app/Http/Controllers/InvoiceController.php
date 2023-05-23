<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Session;

class InvoiceController extends Controller
{
    public function index()
    {
        $product = Product::factory()->make();
        $customerFullName = fake()->name;

        Session::put("product", $product);
        Session::put("fullName", $customerFullName);

        return view('invoiceForm', [
            "fullName" => $customerFullName,
            "product" => $product,


        ]);

    }

    public function payWithCreditCard()
    {
        return view('paymentForm');
    }

    public function processPayment()
    {

    }
}
