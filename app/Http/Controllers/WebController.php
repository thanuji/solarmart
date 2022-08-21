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

    public function single(Request $request, $item_id)
    {
        $images = DB::table('item_images')->where('item_id',$item_id)->get();
        $item = DB::table('items')->where('id',$item_id)->get()[0];

        $items = DB::table('item_images')
        ->join('items', 'item_images.item_id' , 'items.id')->get()->unique('item_id');

        return view('single_item',compact('item','images','items'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $items = DB::table('item_images')
        ->join('items', 'item_images.item_id' , 'items.id')->where('name', 'LIKE', "%{$searchTerm}%")->get()->unique('item_id');

        return view('home',compact('items'));
    }
}
