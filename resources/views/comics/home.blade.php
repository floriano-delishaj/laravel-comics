@extends('layouts.default')
@section('pageTitle', 'Comics')

@section('content')

    @include('components.jumbotron')

    <main>
        <div class="container">

            <div class="current-series">
                current series
            </div>

            <div class="row">
                @foreach($comicsData as $value)
                    <div class="col-2 pt-3">
                        <div class="card-box">
                            <div class="card-img">
                                <a href="{{route('comics.details', ['id' => $loop->index])}}">
                                    <img src="{{$value['thumb']}}" alt="">
                                </a>
                            </div>
                            <p>{{$value['series']}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center pb-4">
                <div class="load-more">
                    load more
                </div>
            </div>
        </div>
    </main>

    <section class="info-content">
        <div class="container">
            <ul>
                @foreach($infoMenu as $item)
                    <li>
                        <div class="info-icon">

                            <img src="img/{{$item['img']}}">

                        </div>
                        <div class="info-text">
                        <span>
                            {{$item['text']}}
                        </span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
