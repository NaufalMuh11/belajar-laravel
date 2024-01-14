@extends('layout.mainlayout')
<style>
    table{
        font-size: 14px;
    }
</style>
@section('title', 'Class')

@section('content')
    <h1> ini halaman Class <h1>
    <h3> Class List<h3>

    <table class = 'table'>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
    </thead>
    <tbody>
        @foreach($classList as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <td><a href=''>Detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection