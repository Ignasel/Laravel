@extends('skelbimai/main')
@section('content')
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({!! asset('images/turgus.jpg') !!});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Redaguokit  skelbimą!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors -> all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="get" action="/ad_update/{{$ad->id}}" class="p-5 bg-white">
                        @csrf
                        <div class="row form-group" {{$ad->id}}>

                            <div class="col-md-12">
                                <label class="text-black" for="name">Pavadinimas</label>
                                <input type="text" id="name" value="{{$ad->title}}" name="title" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Aprašymas</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$ad->description}}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="price">Kaina</label>
                                <input type="text" id="name" value="{{$ad->price}}" name="price" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleInputEmail1">El. paštas</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" value="{{$ad->email}}" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Telefonas</label>
                                <input type="text" id="phone" name="phone" value="{{$ad->phone}}" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Vieta</label>
                                <input type="text" id="location" value="{{$ad->location}}" name="location" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Kategorija</label>
                                <select class="form-control" name="cat_id" >
                                    <option value="{{$ad->cat_id}}"></option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Nuotraukos:</label>
                                <input type="file" id="img" name="img" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Koreguoti" name="submit" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop

