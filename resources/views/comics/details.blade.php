@extends('layouts.default')

@section('pageTitle', $comic['title'])

@section('content')

    @include('components.jumbotron')

<section class="details">
    <div class="blue-bar">
        <div class="container">
            <div class="card-img">
                <div class="img-info">comic book</div>
                <img src="{{$comic['thumb']}}" alt="">
                <div class="img-info">view gallery</div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-lg-6 info-comic pt-4">
                <h3 class="pb-3">{{$comic['title']}}</h3>
                <div class="check-bar d-flex">
                    <div class="price d-flex align-items-center justify-content-between">
                        <span class="text-gray">U.S. Price: <span class="text-white"> {{$comic['price']}}</span></span>
                        <span class="text-gray">available</span>
                    </div>
                    <div class="check d-flex align-items-center justify-content-center">
                        <span class="text-white">check availability</span>
                    </div>
                </div>

                <p class="pt-3">{{$comic['description']}}</p>
            </div>

            <div class="col-12 col-lg-6 pt-4">
                <div class="w-50 text-end">
                    <h5>ADVERTISEMENT</h5>
                    <img src="/img/adv.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"><h3 class="fw-bold">Talent</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="w-25">Art by:</th>
                            <td>
                                @foreach($comic['artists'] as $artist)
                                    {{$artist}},
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="w-25">Written by:</th>
                            <td>
                                @foreach($comic['writers'] as $writer)
                                    {{$writer}},
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-12 col-lg-6">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"><h3 class="fw-bold">Specs</h3></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" class="w-25">Series:</th>
                        <td><span class="text-uppercase">{{$comic['series']}}</span></td>
                    </tr>
                    <tr>
                        <th scope="row" class="w-25">U.S. Price:</th>
                        <td>{{$comic['price']}}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="w-25">On Sale Date:</th>
                        <td>{{$comic['sale_date']}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
