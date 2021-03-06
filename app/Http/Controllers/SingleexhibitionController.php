<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use App\Models\Image;
use Illuminate\Http\Request;

class SingleexhibitionController extends Controller
{
    public function __invoke(Request $request, string $id)
    {

        $images = Image::where('exhibition_id', '=', $id)->get();
        $exhibition = Exhibition::where('id', '=', $id)->first();
        return view('singleexhibition', ['exhibition' => $exhibition, 'images' => $images]);
    }
}
