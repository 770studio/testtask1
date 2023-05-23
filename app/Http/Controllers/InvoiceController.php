<?php

namespace App\Http\Controllers;


use App\Http\Requests\ProcessPaymentRequest;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Services\Payments\CreditCardProcessor;
use Illuminate\Support\Facades\DB;
use Session;

class InvoiceController extends Controller
{
    public function index()
    {

        Session::put('product', Product::factory()->make());
        Session::put('fullName', fake()->name);

        return view('invoiceForm');

    }

    public function payWithCreditCard()
    {
        return view('paymentForm');
    }

    public function processPayment(ProcessPaymentRequest $request, CreditCardProcessor $paymentProcessor)
    {

        DB::transaction(function () use ($request, $paymentProcessor, &$status) {
            $order = Order::create($request->getOrder());
            $status = $paymentProcessor->processPayment();
            $payment = Payment::create([
                'order_id' => $order->id,
                'product_id' => $order->product_id,
                'total' => $order->total,
                'status' => $status
            ]);

        });

        return response($status);

    }
}
