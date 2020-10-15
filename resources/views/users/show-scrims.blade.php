@extends('layouts.appScrim')

@section('content')
    <div class="getshow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                              <a href="#daftar">HItung Hasil</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-md-12 mt-4">
                    <h2 class="title">Daftar Peserta</h2>
                    <div class="leader-heading">
                        <p class="l-h comm-h">No</p>
                        <p class="l-h tk-h h-common">Nama Squad</p>
                        <p class="l-h tk-h h-common">Status</p>
                        <p class="l-h tk-h h-common">Tanggal Join</p>
                    </div>
                    @foreach ($squads as $squad)
                    <div class="leader-heading leader-body">
                    <p class="l-h comm-h">{{$loop->iteration}}</p>
                    <p class="l-h tk-h h-common">{{$squad->nama_squad}}</p>
                    <p class="l-h tk-h h-common">{{$squad->status}}</p>
                    <p class="l-h tk-h h-common"><a href="{{route('user.create')}}">masukkan point</a></p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
