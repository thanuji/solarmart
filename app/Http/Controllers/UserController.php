<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function listSellers()
    {
        $users = DB::table('users')->get()->where('role','seller');
        return view('admin.list_users',compact('users'));
    }

    public function listBuyers()
    {
        $users = DB::table('users')->get()->where('role','buyer');
        return view('admin.list_users',compact('users'));
    }
    
    public function delete(Request $request ,$user_id)
    { 
        DB::delete('delete from users where id = ?',[$user_id]);
                
        return redirect()
        ->back()
        ->with('success', 'User deleted successfully.');
       
    }
}
