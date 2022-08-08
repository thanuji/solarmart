<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Redirect,Response;

class ContactController extends Controller
{
    
    public function index()
    {
      return view('contact');
    }
 
    public function store(Request $request)
    {
        $data = request()->validate([
        'Name' => 'required',
        'Email' => 'required|Email',
        'Phone'=>'required|Phone',
        'Company'=>'required|Company',
        'Message' => 'required'
        ]);
        return redirect('contact')->with('status','Yor message has been sent');


    }
}