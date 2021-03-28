<?php

namespace App\Http\Controllers;

use App\UrlShortener;
use Illuminate\Http\Request;
use Str;

/**
 * @group  User management
 *
 * APIs for url shortener
 */

class ShortlinkController extends Controller
{


    public function home()
    {
        return view('welcome');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortLinks = UrlShortener::latest()->get();

        return response()->json(['shortLinks' => $shortLinks]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $hash = Str::random(6);

        UrlShortener::create([
            'url' => $request->url,
            'hash' => $hash,
        ]);

        return response()->json(['success' => 'url created successfully'], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenLink($hash)
    {
        $find = UrlShortener::where('hash', $hash)->first();

        return response()->json(['link' => $find->url], 200);
    }
}
