@php
    /** @var string $fullName */
    use App\Models\Product;$fullName = Session::get('fullName');
    /** @var Product $product */
    $product = Session::get('product');
@endphp

<div style="    text-align: center;">
    <h1>{{ $fullName }}</h1>
    <br>
    <h3>{{ $product->name }}</h3>
    <br>
    <br>
    <h1>{{ $product->price }} {{ $product->currency}}</h1>
    <br>

    <form method="POST" action="{{ route('pay_with_cc') }}">
        @csrf
        <button type="submit" style=" width: 200px;height: 50px;">Оплатить</button>
    </form>


</div>
