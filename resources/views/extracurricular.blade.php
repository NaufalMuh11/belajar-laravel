@extends('layout.mainlayout')

@section('title', 'Extracurricular')
<style>
    table{
        font-size: 14px;
    }
</style>
@section('content')
    <h1> ini halaman Extracurricular <h1>
    <h3> Extracurricular List<h3>

        <table class='table'>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Anggota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ekskulList as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>
                            @foreach ($data->students as $item)
                                - {{$item ->name}} <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
        </table>
@endsection