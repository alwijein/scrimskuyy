@extends('layouts.appScrim')

{{-- @section('title',$slug) --}}

@section('content')
    <header class="getshow">
            <div class="cardx">
                <div class="card-header">
                    <strong><h3>Masukkan Point</h3></strong>
                </div>
                <div class="card-body">
                <form action="{{ route('scrims.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('users.partial.form-daftar-control',['submit' => 'Create'])
                </form>
                </div>
            </div>
    </header>
@endsection
