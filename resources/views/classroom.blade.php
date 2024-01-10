@extends('layout.mainlayout')
<style>
    table{
        font-size: 18px;
    }
</style>
@section('title', 'Students')

@section('content')
    <h1> ini halaman Class <h1>
    <h3> Class List<h3>

    <table class = 'table'>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Students</th>
            </tr>
    </thead>
    <tbody>
        @foreach($classList as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <td>
                @foreach ($data->students as $student)
                - {{$student['name']}}<br>
                @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
@endsection