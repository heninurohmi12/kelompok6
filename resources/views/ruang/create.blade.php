@extends("layouts.global")
@section("title") Create New User @endsection
@section("content")
<div class="col-md-8">
    @if(session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('ruang.store')}}" method="POST">
        @csrf
        <label for="kelas">Kelas</label>
        <input class="form-control" placeholder="Ruang Kelas" type="text" name="kelas" id="kelas" />
        <br>
        <label for="gedung">Gedung</label>
        <input class="form-control" placeholder="gedung" type="text" name="gedung" id="gedung" />
        <br>
        <input class="btn btn-primary" type="submit" value="Save" />
        <a href="{{route('ruang.index')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection
