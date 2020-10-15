<?php

namespace App\Http\Controllers;

use App\Squad;
use App\Http\Requests\SquadRequest;
use Illuminate\Http\Request;

class SquadController extends Controller
{
    public function store(SquadRequest $request)
    {
        $attr = $request->all();
        // Assign User
        $attr['id_user'] = auth()->user()->id;
        $nama_logo = "logo_squad";
        // Assign Image
        $logo = request()->file('logo_squad');
        $logoUrl = $logo->storeAs("images/squads","{$nama_logo}.{$logo->extension()}");
        $attr['logo'] = $logoUrl;

        // Create new posts
        $squads = Squad::create($attr);
        $squads->event()->attach($attr['id_event']);
        session()->flash('success','The Post is Success To Add');
        session()->flash('error','The Post is Not Succes To Add');

        return redirect('/scrims');
    }
}
