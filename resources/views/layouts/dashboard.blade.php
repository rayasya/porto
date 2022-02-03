@extends('components.porto.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Selamat Datang {{ Auth::user()->name }} di Dashboard </h3>
        </div>
    </div>
@endsection