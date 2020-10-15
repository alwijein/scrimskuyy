@extends('layouts.appScrim')

@section('title',$events->slug)

@section('content')
    <div class="getshow">
        <div class="container">
            <div class="cardx">
                <div class="card_left">
                  <img src="{{asset($events->takeImage())}}" alt="">
                </div>
                <div class="card_right">
                  <h1>{{$events->nama_event}}</h1>
                  <div class="card_right__details">
                    <ul>
                      <li>{{$events->created_at->format('d M, Y')}}</li>
                      <li>{{$events->created_at->diffforhumans()}}</li>
                    </ul>

                    <div class="card_right__review">
                      <p>{{$events->peraturan}}</p>
                      <a href="https://www.imdb.com/title/tt0266697/plotsummary?ref_=tt_stry_pl" target="_blank">Read more</a>
                    </div>
                    <div class="card_right__button">
                      <a href="#daftar">DAFTAR SEKARANG</a>
                    </div>
                  </div>
                </div>
              </div>
                <div class="mt-5" id="daftar">
                    <div class="cardx">
                        <div class="card-header">
                            <strong><h4>Daftar Scrim</h4></strong>
                        </div>
                        <div class="card-body">
                        <form action="{{ route('squads.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('scrims.partial.form-events-control',['submit' => 'Daftar','id_event'=>$events->id])
                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
