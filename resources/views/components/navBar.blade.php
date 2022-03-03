<?php
$navList = [
    'characters' => 'characters',
    'comics' => 'comics',
    'movies' => 'movies',
    'tv' => 'tv',
    'games' => 'games',
    'collectibles' => 'collectibles',
    'videos' => 'videos',
    'fans' => 'fans',
    'news' => 'news',
    'shop' => 'shop'
];

?>

<header>
    <div class="container">
        <div class="header-left">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/dc-logo.png') }}" />
            </a>
        </div>

        <div class="header-right">
            <ul>
                @foreach($navList as $key => $navItem)
                <li class="">
                    <a href="{{ route($key) }}">
                        {{$navItem}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
