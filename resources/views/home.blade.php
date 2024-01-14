@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
    <h1> ini halaman home <h1>
    <h2> Selamat datang {{$name}}, kamu adalah {{$role}}<h2>

@endsection