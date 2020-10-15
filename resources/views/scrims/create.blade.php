@extends('layouts.appScrim')

{{-- @section('title',$slug) --}}

@section('content')
    <header class="getshow">
    .<div class="container">

        <div class="cardx">
            <div class="card-header">
                <strong><h3>Daftar Scrim</h3></strong>
            </div>
            <div class="card-body">
            <form action="{{ route('scrims.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('scrims.partial.form-control',['submit' => 'Create'])
            </form>
            </div>
        </div>
    </div>
    </header>
@endsection
