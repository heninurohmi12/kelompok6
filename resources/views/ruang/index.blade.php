@extends("layouts.global")
@section("title") Users list @endsection
@section("content")
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<div class="row">
    <div class="col-md-6">
        <form action="{{route('ruang.index')}}">
            <div class="input-group mb-3">
                <input value="{{Request::get('keyword')}}" name="keyword" class="form-control col-md-10" type="text"
                    placeholder="Filter berdasarkan Ruang Kelas" />
                <div class="input-group-append">
                    <input type="submit" value="Filter" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>
<hr class="my-3">
<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('ruang.create')}}" class="btn btn-primary">Create Ruang</a>
    </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>Ruang Kelas</b></th>
            <th><b>Gedung</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach($ruangs as $ruang)
        <tr>
            <td>{{$ruang->kelas}}</td>
            <td>{{$ruang->gedung}}</td>
            <td>
                <a class="btn btn-info text-white btn-sm" href="{{route('ruang.edit',[$ruang->id])}}">Edit</a>
                <a href="{{route('ruang.show', [$ruang->id])}}" class="btn btn-primary btn-sm">Detail</a>
                <form onsubmit="return confirm('Delete this ruang permanently?')" class="d-inline"
                    action="{{route('ruang.destroy', [$ruang->id])}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
        <td colspan=10>
            {{$ruangs->appends(Request::all())->links()}}
        </td>
        </tr>
        </tfoot>
</table>
@endsection
