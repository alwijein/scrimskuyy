<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Squad;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $id_user = auth()->user()->id;
        $events = Event::where('id_user','=',$id_user)->paginate(6);
        return view('users.my-scrims',compact('events'));
    }

    public function show($slug)
    {
        $events = Event::where('slug', $slug)->first();
       // $id_event = $event->id;
        $squads = $events->squad()->get();
        // dd($squads);
        return view('users.show-scrims', compact('events','squads'));
    }

    public function create(){
        return view('users.create-scrims');
    }
}
