@extends('layout.mainlayout')

@section('title', 'Students')

@section('content')
    <h1> ini halaman Student <h1>
    <h3> Student List<h3>
        <ol>
            @foreach ($studentList as $data)
            <li>{{$data ->name}} | {{$data->gender}} | {{$data->nis}}</li>
            @endforeach
        </ol>
@endsection