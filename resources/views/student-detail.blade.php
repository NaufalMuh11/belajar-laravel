@extends('layout.mainlayout')

@section('title', 'Detail')
<style>
    table{
        font-size: 14px;
    }
</style>
@section('content')

    <h2> Anda sedang melihat data detail dari siswa yang bernama {{$student->name}}</h2>

    {{$student->}}
    @endsection