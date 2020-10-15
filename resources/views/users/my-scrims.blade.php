@extends('layouts.appScrim')

{{-- @section('title', $events->slug) --}}

@section('content')

    <header class="getmasthead">

        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                <div class="col-md-4">
                <div class="cardContainer inactive">
                    <div class="card">
                      <div class="side front">
                        <div class="img">
                            <img class="card-banner-top" src="{{asset($event->takeImage())}}">
                        </div>
                        <div class="info">
                        <h2>{{$event->nama_event}}</h2>
                        <p>{{$event->peraturan}}</p>
                        </div>
                      </div>
                      <div class="side back">
                        <div class="info">
                          <h2>{{$event->nama_event}}</h2>
                          <div class="reviews">
                          <p>{{$event->jadwal}}</p>
                          <p>{{$event->jadwal}}</p>
                          </div>
                          <ul>
                            <li>{{$event->peraturan}}</li>
                            <li>Your choice of deck sizes ranging from 36", 48", 52" and 60"</li>
                            <li>Updated hip bolstering offers superior operator comfort and positioning</li>
                          </ul>
                          <div class="btn">
                          <h4><a href="users/{{$event->slug}}">Lihat Riwayat</a></h4>
                            <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
                              <path d="M0-.25h24v24H0z" fill="none" /></svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <div>
                    {{ $events->links() }}
                </div>
            </div>
        </div>


    </header>
@endsection
