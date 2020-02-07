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
                            <h1>Pridėkite kategoriją</h1>
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
<div class="col-sm-6 ">
    <div class="col-lg-6 justify-content-center">
    <a class="btn btn-primary" href="/addCat" role="button">Pridėti</a>
    <table class="table table-bordered">
        <tr>
            <th>Pavadinimas</th>
            <th>Funkcija</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td><a href="/salinti/category/{{$category->id}}">Šalinti</a></td>
            </tr>
        @endforeach
    </table>
    </div>
</div>
</div>
</div>

@stop