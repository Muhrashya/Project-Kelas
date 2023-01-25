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
                    <form action="/order/update/{{ $product->id }}" method="POST">
                     @csrf
                     @method('put')
                     <div class="mb-3">
                         <label for="nama_product" class="form-label">Nama Product</label>
                         <input type="text" class="form-control" id="nama_product" name="nama_product" value="{{ $product->nama_product }}" placeholder="nama product" readonly>
                      </div>
                     <div class="mb-3">
                         <label for="label" class="form-label">Jenis Product</label>
                         <input type="text" class="form-control" id="jenis_product" name="jenis_product" value="{{ $product->jenis_product }}" placeholder="jenis product" readonly>
                      </div>
                     <div class="mb-3">
                         <label for="label" class="form-label">Harga</label>
                         <input type="number" class="form-control" id="harga" name="harga" value="{{ $product->harga }}" placeholder="harga" readonly>
                      </div>
                     
                     <div class="mb-3">
                         <label for="label" class="form-label">Jumlah Pembelian</label>
                         <input type="number" class="form-control" id="qty" name="qty" placeholder="jumlah pembelian">
                      </div>
                      <div class="mb-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div>
                      
                     </form>
                   </div>  
            </div>
        </div>
    </section>
    
@include('sweetalert::alert')
    <!-- Checkout Section End -->
@endsection