@extends('masterhome')

@section('judul')
<div class="container-fluid">
    <div class="col">
        <h1 class="text-center text-light"> Admin Menu </h1>
    </div>
    <div class="col-12 row mt-5">
        <div class="col-sm-3 justify-content-center">
            <a href="/admin/laporan" type="button" class="btn btn-primary btn-block border">Lihat Laporan</a>
        </div>
        <div class="col-sm-3 justify-content-center">
            <button class="btn btn-primary btn-block border">Menu B</button>
        </div>
        <div class="col-sm-3 justify-content-center">
            <a href="/admin/upload" type="button" class="btn btn-primary btn-block border">Upload Media</a>
        </div>
        <div class="col-sm-3 justify-content-center">
            <a href="/admin/logout" type="button" class="btn btn-primary btn-block border">Logout</a>
        </div>
    </div>
</div>
@endsection