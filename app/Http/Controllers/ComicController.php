<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index ()
    {

        $infoMenu = [
            [
                'img' => 'buy-comics-digital-comics.png',
                'text' => 'digital comics'
            ],
            [
                'img' => 'buy-comics-merchandise.png',
                'text' => 'dc merchandise'
            ],
            [
                'img' => 'buy-comics-subscriptions.png',
                'text' => 'subscription'
            ],
            [
                'img' => 'buy-comics-shop-locator.png',
                'text' => 'comic shop locator'
            ],
            [
                'img' => 'buy-dc-power-visa.svg',
                'text' => 'dc power visa'
            ],
        ];

        $comicsData = config('comics');



        return view('comics.home', compact('comicsData', 'infoMenu'));
    }

    public function read($id) {
        $data = config('comics');

        if(!is_numeric($id) || (int) $id >= count($data)) {
            abort('404');
        }

        $comic = $data[$id];

        return view('comics.details', compact('comic'));
    }
}
