<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use DB;

class WebController extends Controller
{
    public function index()
    {
        
        $items = DB::table('item_images')
        ->join('items', 'item_images.item_id' , 'items.id')->get()->unique('item_id');

        return view('home',compact('items'));
    }
}
