@extends('layout.mainlayout')

@section('title', 'Students')
<style>
    table{
        font-size: 14px;
    }
</style>
@section('content')
    <h1> ini halaman Student <h1>
    <h3> Student List<h3>

    <table class='table'>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
            <tr>
                <td>{{$data->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->nis}}</td>
                <td><a href='student/{{$data->id}}'>Detail</a></td>
            </tr>                
            @endforeach
@endsection