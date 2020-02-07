@extends('skelbimai/main')
@section('content')

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({!! asset('images/turgus.jpg') !!});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Įdėkite Naują skelbimą!</h1>
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
                    <form method="post" action="/store-ad" class="p-5 bg-white">
                        @csrf
                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="name">Pavadinimas</label>
                                <input type="text" id="name" name="title" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Aprašymas</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="price">Kaina</label>
                                <input type="decimal" id="name" name="price" class="form-control">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleInputEmail1">El. paštas</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Telefonas</label>
                                <input type="string" id="phone" name="phone" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Vieta</label>
                                <input type="text" id="location" name="location" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Kategorija</label>
                                @foreach($categories as $category)
                            <select class="form-control" name="cat_id" >
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            </select>
                                    @endforeach
                        </div>
                            <div class="col-md-12">
                                <label class="text-black" for="name">Nuotraukos:</label>
                                <input type="file" id="img" name="img" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Pridėti" name="submit" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop