@extends('layout.mainlayout')

@section('title', 'Teacher')
<style>
    table{
        font-size: 14px;
    }
</style>
@section('content')
    <h1> ini halaman Teacher <h1>
    <h3> Teacher List<h3>

    <table class ='table'>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherList as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection