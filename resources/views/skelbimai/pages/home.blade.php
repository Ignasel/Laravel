@extends('skelbimai/main')

@section('content')
    <div class="site-blocks-cover overlay" style="background-image: url({!! asset('images/turgus.jpg') !!}););" data-aos="fade" data-stellar-background-ratio="0.5">

        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-12">
                    <div class="row justify-content-center mb-4">
                        <div class="col-md-8 text-center">
                            <h1 class="" data-aos="fade-up">Nemokami skelbimai visiems</h1>
                            <p data-aos="fade-up" data-aos-delay="100">Greiti ir smagūs skelbimai</p>
                        </div>
                    </div>

                    <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
                        <form method="GET" action="/searchIt">
                            @csrf
                            <div class="row align-items-center">
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                                    <input type="text" class="form-control rounded" name="titleForSearch" placeholder="Ko ieškai?">
                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="wrap-icon">
                                        <span class="icon icon-room"></span>
                                        <input type="text" class="form-control rounded" name="locationForSearch" placeholder="vieta">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                    <div class="select-wrap">
                                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                        <select class="form-control rounded" name="categoryId" id="">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                                    <input type="submit" class="btn btn-primary btn-block rounded" value="Ieškoti">
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="row text-left trending-search" data-aos="fade-up"  data-aos-delay="300">
                        <div class="col-12">
                            <h2 class="d-inline-block">Populiarios paieškos:</h2>
                            <a href="#">Baldai</a>
                            <a href="#">Kita</a>
                            <a href="#">Automobiliai</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="h5 mb-4 text-black">Populiarūs skelbimai</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12  block-13">
                    <div class="owl-carousel nonloop-block-13">
                        @foreach($ads as $ad)
                            <div class="d-block d-md-flex listing vertical">
                                <a href="/skelbimas/{{$ad->id}}" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
                                <div class="lh-content">
                                    <span class="category">{{$ad->name}}</span>
                                    <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                    <h3><a href="/skelbimas/{{$ad->id}}"></a>{{$ad->title}}</h3>
                                    <p>{{$ad->description}}</p>
                                    <p>{{$ad->location}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
