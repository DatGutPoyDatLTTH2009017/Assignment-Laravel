<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function create(){
        return view('form');
    }
    public function store(Request $request){
        $apartment = new Apartment();
        $apartment->fill($request->all());
        $apartment->save();
        return $request;
    }
    public function index(){
        $list = Apartment::all();
        return view('list',[
            'list' => $list
        ]);
    }
}
