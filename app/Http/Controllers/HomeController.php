<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Org;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        $events = Event::all();
        $orgs = Org::all();
        return view('home.home', compact('orgs','events'));
    }
}
