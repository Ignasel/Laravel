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
                        @foreach($ads as $ad)
                            <div class="col-lg-6">
                                <div class="d-block d-md-flex listing vertical">
                                    <a href="/skelbimas/{{$ad->id}}" class="img d-block" style="background-image: url({{'storage/'.$ad->img}})"></a>
                                    <div class="lh-content">
                                        <span class="category">{{$ad->name}}</span>
                                        <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                        <h3><a href="/skelbimas/{{$ad->id}}"></a>{{$ad->title}}</h3>
                                        <p>{{$ad->description}}</p>
                                        <p>{{$ad->location}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-5 text-center">
        <div class="custom-pagination">
        </div>
    </div>



@stop