@extends('layouts.whole')

@section('content')
<div id="banner">
    <h1>Bubu's Fits</h1>
    <i>Your No.1 Clothing Brand</i>
</div>

<main>
    <a href="my_shop.html">
        <h2 class="section-heading">Available services</h2>
    </a>
    <section>
        <div class="card">
            <div class="card-image">
                <a href="{{route('blog')}}">
                    <img src="img/31.jpg" alt="Card Image">
                </a>
            </div>

            <div class="card-description">
                <a href="{{route('blog')}}">
                    <h3>Creator's Blog</h3>
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <a href="{{route('shop')}}">
                    <img src="img/1.jpg" alt="Card Image">
                </a>
            </div>

            <div class="card-description">
                <a href="{{route('shop')}}">
                    <h3>Men Wears</h3>
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <a href="{{route('shop')}}">
                    <img src="img/27.jpg" alt="Card Image">
                </a>
            </div>
            <div class="card-description">
                <a href="{{route('shop')}}">
                    <h3>Women Wears</h3>
                </a>
            </div>
        </div>
    </section>
@endsection
        