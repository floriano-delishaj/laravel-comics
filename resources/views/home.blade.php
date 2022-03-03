@extends('layouts.default')



@section('pageTitle', 'Home')



@section('content')
    <section class="jumbotron">

    </section>

    <main>
        <div class="container">

            <div class="current-series">
                current series
            </div>

            <div class="row">
                @foreach($data as $value)
                <div class="col-2 pt-3">
                    <div class="card-box">
                        <div class="card-img">
                            <img src="{{$value['thumb']}}" alt="">
                        </div>
                        <p>{{$value['series']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
