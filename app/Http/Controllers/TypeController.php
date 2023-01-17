<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Form;

class TypeController extends Controller
{
    public function index(){
      
        return view('home', [
            'data' => Type::all()
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'type_name' => 'required',
            'price' => 'required|numeric',
            'desc' => 'required',
            'photo' => 'required' 
        ]);
        Type::create($request->all());
        return redirect()->route('index');
    }
}
