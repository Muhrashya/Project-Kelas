@extends('halaman.depan')

@section('content')

   <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('/template/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>TokoBuah</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <p>Siapa yang tidak suka dengan buah! Buah tentu menjadi salah satu makanan yang difavoritkan oleh banyak orang. Mulai dengan balita sampai orang tua menggemari buah lantaran menyegarkan dan menyehatkan. Buah menjadi salah satu bahan asupan makanan yang memiliki kandungan berbagai vitamin, nutrisi dan juga mineral. 
                    Buah digemari semua orang dengan berbagai macam jenisnya, Belanja dengan Puas dan harga Pas hanya di tokobuah.id
                    Buah Yang dijual Fresh dan terjamin Kesehatanya,
                    Untukmu yang males keluar tetapi ingin membeli buah ,  bisa banget dengan layanan gosend tokobuah.id , tunggu buah pesanan anda sampai dirumah hanya dengan sekali klik
                </p>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section>
       
      
        
    @include('sweetalert::alert')    <!-- Product Section End -->
    </section>


@endsection
