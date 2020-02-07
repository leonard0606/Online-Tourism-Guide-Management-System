<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;

class BookingsController extends Controller
{
    public function create($id){
        $attraction = Attraction::findOrFail($id);
        return \view('bookings.create', ['attraction'=>$attraction]);
    }

    public function store(){
        \dd(request());
    }
}
