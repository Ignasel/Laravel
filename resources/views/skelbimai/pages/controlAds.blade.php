@extends('skelbimai/main')

@section('content')

    <div class="site-blocks-cover inner-page-cover overlay"
         style="background-image: url({!! asset('images/turgus.jpg') !!});" data-aos="fade"
         data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Valdykite skelbimus</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors -> all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="/addAd" role="button">Pridėti skelbimą</a>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-10 ">
                <div class="col-lg-10 justify-content-center">
                    <table class="table table-bordered">
                        <tr>
                            <th>Pavadinimas</th>
                            <th>Aprašymas</th>
                            <th>Kaina</th>
                            <th>El. Paštas</th>
                            <th>Telefonas</th>
                            <th>Vieta</th>
                            <th>Kategorija</th>
                            <th>Patalpinta</th>
                        </tr>
                        @foreach($ads as $ad)
                            <tr>
                                <td>{{$ad->title}}</td>
                                <td>{{$ad->description}}</td>
                                <td>{{$ad->price}}</td>
                                <td>{{$ad->email}}</td>
                                <td>{{$ad->phone}}</td>
                                <td>{{$ad->location}}</td>
                            @foreach($categories as $category)
                                @if($ad->cat_id == $category->id)
                                    <td>{{$category->name}}</td>
                                    @endif
                            @endforeach
                                <td>{{$ad->created_at}}</td>
                                <td><a href="/salinti/ad/{{$ad->id}}">Šalinti</a></td>
                                <td><a href="/updateAd/ad/{{$ad->id}}">Koreguoti</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop