@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
    <h1> ini halaman home <h1>
    <h2> Selamat datang {{$name}}, kamu adalah {{$role}}<h2>

    <table class ="table">
        <tr>
            <th> No.</th>
            <th> nama</th>
        </tr>
        @foreach($buah as $data)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$data}}</td>
        </tr>
         @endforeach
    </table>
@endsection