<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('home', [
            'data' => Rooms::all()
        ]);
    }
    public function store(Request $request){
        
    }
}
