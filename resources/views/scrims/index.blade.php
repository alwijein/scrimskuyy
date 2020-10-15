@extends('layouts.appScrim')

{{-- @section('title', $events->slug) --}}

@section('content')

    <header class="getmasthead">

        <div class="container">
            <div class="row">
                <div class="s130 w-100">
                    <form class="p-0 d-flex align-items-center justify-content-center pb-2">
                      <div class="inner-form">
                        <div class="input-field first-wrap">
                          <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                            </svg>
                          </div>
                          <input id="search" type="text" placeholder="What are you looking for?" />
                        </div>
                        <div class="input-field second-wrap">
                          <button class="btn-search" type="button">SEARCH</button>
                        </div>
                      </div>
                    </form>
                  </div>
            </div>
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
                          <h4><a href="scrims/{{$event->slug}}">Daftar Sekarang</a></h4>
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
