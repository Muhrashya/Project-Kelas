@extends('layouts.master')

@section('content')

 <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('/template/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
               
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <div class="card-body">
                    <form action="/checkout/bayar" method="POST">
                     @csrf
                     @method('put')
                     <?php
                     use App\Models\Product;

                      $product = Product::all();
                        $total = 15000 * 7;
                     
                     ?>
                     <div class="mb-3">
                         <label for="label" class="form-label">Total Pembelian Anda Adalah</label>
                         <input type="number" class="form-control" id="total" name="total"  value="{{ $total }}" placeholder="jumlah pembelian">
                      </div>
                      <div class="mb-3">
                        <button type="submit" class="btn btn-success">Bayar</button>
                     </div>
                      
                     </form>
                   </div>  
            </div>
        </div>
        @include('sweetalert::alert')
    </section>
    
@include('sweetalert::alert')
    <!-- Checkout Section End -->
@endsection