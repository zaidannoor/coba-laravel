@extends('layouts.main')

@section('container')
    <div class="container">
        <h3>Nama Saya {{ $name }}</h3>
        <h4>Prodi {{ $prodi }}</h4>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
        <h5>{{ $title }}</h5>
    </div>
@endsection