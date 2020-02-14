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
                            <h1>Išreiškite savo nuomonę</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="get" action="/storeComment/{{$ad->id}}" enctype="multipart/form-data" class="p-5 bg-white">
        @csrf
        <div class="form-group">
            <div class="row justify-content-center">
                <div class="col-3 align-self-center">
                    <textarea class="form-control" placeholder="Vardas" name="name" id="exampleFormControlTextarea1" rows="1"></textarea>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row justify-content-center">
                <div class="col-6 align-self-center">
                    <label for="exampleFormControlTextarea1" style="text-align: center">Komentaras</label>
                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        <div class="row form-group">
            <div class="col-md-12">
                <input type="submit" value="Komentuoti" name="submit" class="btn btn-primary py-2 px-4 text-white">
            </div>
        </div>
        </div>
    </form>
@stop