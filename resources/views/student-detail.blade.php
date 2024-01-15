@extends('layout.mainlayout')

@section('title', 'Students')

@section('content')

<style>
    table {
        font-size: 14px;
    }

    th {
        width: 25%;
    }
</style>

<h2> 
    Anda sedang melihat data detail dari siswa yang bernama {{$student->name}}
</h2>
{{$student}}
<div class="mt-4">
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Gender</th>
            <th>CLass</th>
            <th>Homeroom Teacher</th>
        </tr>
        <tr>
            <td>{{$student->nis}}</td>
            <td>
                @if ($student->gender =='P')
                    Perempuan
                @else
                    Laki-Laki
                @endif
            </td>
            <td>{{$student->class->name}}</td>
            <td>{{$student->class->homeroomTeacher->name}}</td>
        </tr>
    </tabel>
</div>

<div>
    <h3>Extracurriculars</h3>
    <ol>
@foreach ($student->extracurriculars as $item)
    <li>{{$item->name}}</li>
@endforeach
</ol>
</div>
    @endsection