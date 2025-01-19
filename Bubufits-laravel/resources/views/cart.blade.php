@extends('layouts.whole')

@section('content')
<div>
    <a href="{{route('cart')}}">
        <h2 class="page-heading">Cart</h2>
    </a>
    <section>
        <div class="small-container cart-box">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

                @php
                    $total = 0;
                @endphp

                @if(empty($cart))
                    <tr>
                        <td colspan="3"><p>Cart Empty</p></td>
                    </tr>
                @else
                    @foreach($cart as $productId => $item)
                        @php
                            $subtotal = $item['price'] * $item['quantity'];
                            $total += $subtotal;
                        @endphp
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="{{$item['image']}}" alt="cloth">
                                    <div>
                                        <p>{{$item['name']}}</p>
                                        <small>Price: ${{$item['price']}}</small>
                                        <button onclick="removeFromCart('{{ $productId }}')">Remove</button>
                                    </div>
                                </div>
                            </td>
                            <td>{{$item['quantity']}}</td>
                            <td>${{$subtotal}}</td>
                        </tr>
                    @endforeach
                @endif
            </table>

            @if(!empty($cart))
                <div class="total-price">
                    <div class="checkout-container">
                        <a href="{{ route('payment') }}" class="btn btn-primary">Checkout</a>
                    </div>
                    <table>
                        <tr>
                            <td>Total</td>
                            <td>${{$total}}</td>
                        </tr>
                    <style>
                        .checkout-container {
                            text-align: right;
                            margin-top: 20px;
                        }

                        .btn-primary {
                            background-color: #4CAF50; /* Green */
                            border: none;
                            color: white;
                            padding: 15px 32px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;
                            font-size: 16px;
                            margin: 4px 2px;
                            cursor: pointer;
                            border-radius: 12px;
                        }

                        .btn-primary:hover {
                            background-color: #45a049;
                        }
                    </style>
                    </table>
                </div>
            @endif
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src = "cart.js"></script>
@endsection