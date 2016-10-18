<?php

namespace App\Http\Controllers;

use App\phpflickr\phpFlickr;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

//use Illuminate\Support\Facades\Session;


class GalleriesController extends Controller {

    public function index() {
        $frob = $_GET['frob'];
        echo '$frob=' . $frob;
        var_dump(session('new_gallery'));
        dd(Session::get('new_gallery'));
    }

    public function store(Request $request) {
        Session::put('new_gallery', $request->new_gallery);
//        require_once '../../phpflickr/getToken.php';

        $flickr = new phpFlickr(FLICKR_KEY, FLICKR_SECRET, 1);
        $flickr->last_request = $request->new_gallery;
//        Session::put('new_gallery', $request->new_gallery);
        session(['new_gallery' => $request->new_gallery]);
        //var_dump(session('new_gallery'));
//        $flickr->setToken();

        $flickr->auth('write');
//        $flickr->setToken($token)

        var_dump($flickr);
        return 'test';
    }

}
