<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Session;

class ProcessPaymentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'expire_date' => 'required',
            'cc' => 'required|numeric|max_digits:20',
            'cvv' => 'required|numeric|max_digits:4',
            'full_name' => 'required',

        ];
    }

    public function authorize(): bool
    {
        return true;
    }


    public function getOrder(): array
    {
        /** @var Product $product */
        $product = Session::get('product');

        return array_merge(
            $this->validated(), [
                'product_id' => $product->uuid,
                'total' => $product->price,
            ]
        );

    }


}
