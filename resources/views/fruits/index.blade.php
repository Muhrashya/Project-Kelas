


  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fruits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   
@extends('layouts.master')


@section('content')
    <!-- Hero Section Begin -->

        
                {{-- <section class="content">
                    <div class="row mt-3 text-center">
                        @foreach ($product as $pd)
                        <div class="col-md-3">
                            
                            <center>
                            <div class="card" style="width: 16rem; ">
                                <img src="{{ $pd->image }}" class="card-img-top" alt="..." width="100px" height="100px" class="card-img-top">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $pd->nama_product }}</h5>
                                  <p class="card-text">{{ $pd->jenis_product }}</p>
                                  <p class="card-text">Rp. {{ $pd->harga }}</p>
                                  <a href="#" class="btn btn-primary">Tambahkan Ke Keranjang</a><br>
                                </div>
                              </div>
                            
                              @endforeach
                        </div>
                    </center>
                   
                    </div>
                </section> --}}


                <section class="content">
                    <div class="row mt-3 text-center">
                        @foreach ($product as $pd)
                            <div class="col-md-3">
                                <div class="card" style="width: 16rem;">
                                    <img src="{{ $pd->image }}" width="50px" height="150px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $pd->nama_product }}</h5>
                                        <small>{{ $pd->jenis_product }}</small>
                                        <br>
                                        <span class="badge rounded-pill bg-success"><{{ $pd->harga }}</span>
                                        <br>
                                        <br>
                                        <a href="/order/{{ $pd->id }}" class="btn btn-primary">Order</a><br>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </section>
               
            </div>
        </div>
  ]
    <!-- Hero Section End -->

    <!-- Banner End -->
@endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>




