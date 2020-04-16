@extends('layouts.global')
@section('title') Detail Ruang @endsection
@section('content')

<div class="col-md-8">
    <div class="card">
    <div class="card-body">
    <b>Kelas:</b> <br/>
    {{$ruang->kelas}}
    <br><br>

    <b>Gedung:</b><br>
    {{$ruang->gedung}}
<br/><br/>
    <a href="{{route('ruang.index')}}" class="btn btn-danger">Back</a>

@endsection