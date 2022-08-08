<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use DB;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id=Auth::user()->id;
        
        $items = DB::table('item_images')
        ->join('items', 'item_images.item_id' , 'items.id')->get()->unique('item_id')->where('shop_id',$user_id);

        return view('admin.list_items',compact('items'));
    }

    public function addItemIndex()
    {
        return view('admin.add_item');
    }
    public function create(Request $request){
        
        $user_id=Auth::user()->id;

        if($request->get('status') == "on"){
            $status = 2;
        }else{
            $status = 1;
        }

        try{
            $item = new Item([
                'shop_id' =>$user_id,
                'name' => $request->get('name'),
                'brand' =>$request->get('brand'),
                'catergory_id' =>$request->get('category'),
                'quantity' =>$request->get('quantity'),
                'price' =>$request->get('price'),
                'discount' =>$request->get('discount'),
                'description' => $request->get('description'),
                'status' => $status,
                ]);

            $item->save();

            foreach ($request->file('images') as $image) {
                $filename = date('YmdHi').$image->getClientOriginalName();
                $image->move(public_path().'/uploads/', $filename);  
              
                $images = new Image([
                    'item_id' =>$item->id,
                    'image_name' =>$filename,
                    ]);

                $images->save();
  
            }

            return redirect()
            ->back()
            ->with('success', 'Item created successfully.');

        }catch(\Exception $error){
          
            $request->session()->flash('delete',$error);
            return back();
        }
    }

    public function delete(Request $request ,$item_id)
    { 
        $images = DB::table('item_images')->where('item_id',$item_id)->get();
        DB::delete('delete from item_images where item_id = ?',[$item_id]);
        DB::delete('delete from items where id = ?',[$item_id]);
        
       foreach($images as $key => $item){
        unlink("uploads/". $item->image_name);
       }
                
        return redirect()
        ->back()
        ->with('success', 'Item deleted successfully.');
       
    }
}
