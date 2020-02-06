@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({!! asset('images/turgus.jpg') !!});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Visi skelbimai</h1>
                            <p class="mb-0">Rinkitės norimą prekę</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="row">
    @for($i=0; $i<10; $i++)
        <div class="col-lg-6">

            <div class="d-block d-md-flex listing vertical">
                <a href="/skelbimas" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
                <div class="lh-content">
                    <span class="category">Real Estate</span>
                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                    <h3><a href="#">House with Swimming Pool</a></h3>
                    <address>Don St, Brooklyn, New York</address>
                    <p class="mb-0">
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-warning"></span>
                        <span class="icon-star text-secondary"></span>
                        <span class="review">(3 Reviews)</span>
                    </p>
                </div>
            </div>

        </div>
    @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-5 text-center">
        <div class="custom-pagination">
            <span>1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <span class="more-page">...</span>
            <a href="#">10</a>
        </div>
    </div>
@stop

