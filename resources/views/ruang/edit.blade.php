@extends('layouts.global')
@section('title') Edit Ruang @endsection
@section('content')
<div class="col-md-8">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('ruang.update', [$ruang->id])}}"
        method="POST">
        @csrf
        <input type="hidden" value="PUT" name="_method">
        <label for="kelas">Kelas</label>
        <input value="{{$ruang->kelas}}" class="form-control" placeholder="Ruang Kelas" type="text" name="ruang" id="ruang" />
        <br>
        <label for="gedung">Gedung</label>
        <input value="{{$ruang->gdeung}}" class="form-control" placeholder="Gedung" type="text"
            name="gedung" id="gedung" />
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
        <a href="{{route('ruang.index')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
