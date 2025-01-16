@extends('layouts.whole')

@section('content')
<div>
    <h2 class="page-heading">Men's Section</h2>
    <section id="men">
        <div class="card">
            <div class="card-image">
                <button
                    data-id="1" 
                    data-name="Men's Tee" 
                    data-price="10" 
                    data-image="{{asset('img/4.jpg')}}">
                    <img src="img/4.jpg" alt="Men's Tee">
                </button>
            </div>
            <div class="card-description">
                <h3>Men's Tee <br>Price: $10.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="2" 
                    data-name="Simple Tops" 
                    data-price="8" 
                    data-image="img/17.jpg">
                    <img src="img/17.jpg" alt="Simple Tops">
                </button>
            </div>
            <div class="card-description">
                <h3>Simple Tops <br>Price: $8.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="3" 
                    data-name="Jeans" 
                    data-price="25" 
                    data-image="img/11.jpg">
                    <img src="img/11.jpg" alt="Jeans">
                </button>
            </div>
            <div class="card-description">
                <h3>Jeans <br>Price: $25.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="4" 
                    data-name="Cardigan" 
                    data-price="16" 
                    data-image="img/18.jpg">
                    <img src="img/18.jpg" alt="Cardigan">
                </button>
            </div>
            <div class="card-description">
                <h3>Cardigan <br>Price: $16.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="5" 
                    data-name="Sweat-pants" 
                    data-price="18" 
                    data-image="img/14.jpg">
                    <img src="img/14.jpg" alt="Sweat-pants">
                </button>
            </div>
            <div class="card-description">
                <h3>Sweat-pants <br>Price: $18.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="6" 
                    data-name="Jacket" 
                    data-price="28" 
                    data-image="img/15.jpg">
                    <img src="img/15.jpg" alt="Jacket">
                </button>
            </div>
            <div class="card-description">
                <h3>Jacket <br>Price: $28.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="7" 
                    data-name="Trouser" 
                    data-price="12" 
                    data-image="img/26.jpg">
                    <img src="img/26.jpg" alt="Trouser">
                </button>
            </div>
            <div class="card-description">
                <h3>Trouser <br>Price: $12.00</h3>
            </div>
        </div>
    </section>

    <h2 class="page-heading">Women's Section</h2>
    <section id="women">
        <div class="card">
            <div class="card-image">
                <button
                    data-id="8" 
                    data-name="Women's Cardigan" 
                    data-price="18" 
                    data-image="img/5.jpg">
                    <img src="img/5.jpg" alt="Women's Cardigan">
                </button>
            </div>
            <div class="card-description">
                <h3>Women's Cardigan <br>Price: $18.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="9" 
                    data-name="Full Outfit" 
                    data-price="55" 
                    data-image="img/6.jpg">
                    <img src="img/6.jpg" alt="Full Outfit">
                </button>
            </div>
            <div class="card-description">
                <h3>Full Outfit <br>Price: $55.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="10" 
                    data-name="Cardigan" 
                    data-price="24" 
                    data-image="img/9.jpg">
                    <img src="img/9.jpg" alt="Cardigan">
                </button>
            </div>
            <div class="card-description">
                <h3>Cardigan <br>Price: $24.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="11" 
                    data-name="Jeans" 
                    data-price="23" 
                    data-image="img/16.jpg">
                    <img src="img/16.jpg" alt="Jeans">
                </button>
            </div>
            <div class="card-description">
                <h3>Jeans <br>Price: $23.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="12" 
                    data-name="Simple Tops" 
                    data-price="9" 
                    data-image="img/20.jpg">
                    <img src="img/20.jpg" alt="Simple Tops">
                </button>
            </div>
            <div class="card-description">
                <h3>Simple Tops <br>Price: $9.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="13" 
                    data-name="Sweat-pants" 
                    data-price="24" 
                    data-image="img/19.jpg">
                    <img src="img/19.jpg" alt="Sweat-pants">
                </button>
            </div>
            <div class="card-description">
                <h3>Sweat-pants <br>Price: $24.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="14" 
                    data-name="Jacket" 
                    data-price="25" 
                    data-image="img/21.jpg">
                    <img src="img/21.jpg" alt="Jacket">
                </button>
            </div>
            <div class="card-description">
                <h3>Jacket <br>Price: $25.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="15" 
                    data-name="Jean Jacket" 
                    data-price="30" 
                    data-image="img/22.jpg">
                    <img src="img/22.jpg" alt="Jean Jacket">
                </button>
            </div>
            <div class="card-description">
                <h3>Jean Jacket <br>Price: $30.00</h3>
            </div>
        </div>

        <div class="card">
            <div class="card-image">
                <button
                    data-id="16" 
                    data-name="Joggers" 
                    data-price="18" 
                    data-image="img/24.jpg">
                    <img src="img/24.jpg" alt="Joggers">
                </button>
            </div>
            <div class="card-description">
                <h3>Joggers <br>Price: $18.00</h3>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src = "{{asset('cart.js')}}"></script>
@endsection