<?php

namespace App\Http\Controllers;

use App\DaftarEvents;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Str;
use App\Event;
use App\Squad;
use Illuminate\Support\Facades\Auth;

// use Illuminate\http\Request;

class EventController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $events = Event::paginate(6);
        return view('scrims.index',compact('events'));

    }

    public function show($slug)
    {
        $events = Event::where('slug', $slug)->first();
        return view('scrims.show', compact('events'));
    }

    public function create()
    {
        return view('scrims.create', [
            'events' => new Event,
            'squads' => new Squad,
        ]);
    }

    public function store(EventRequest $request)
    {

        // Assign title to the slug

        $attr = $request->all();
        $slug = Str::slug(request('nama_event'));
        $attr['slug'] = $slug;

        // Assign User
        $attr['id_user'] = auth()->user()->id;

        // Assign Image
        $thumbnail = request()->file('thumbnail');
        $thumbnailUrl = $thumbnail->storeAs("images/events","{$slug}.{$thumbnail->extension()}");
        $attr['thumbnail'] = $thumbnailUrl;

        // Create new posts
        $events = Event::create($attr);

        session()->flash('success','The Post is Success To Add');
        session()->flash('error','The Post is Not Succes To Add');

        return redirect('/scrims');
    }

}
