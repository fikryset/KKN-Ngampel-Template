@extends('masterhome')

@section('judul')
<div class="col">
    <h1 class="text-center text-light">Pantau Warga</h1>
    <h5 class="text-center text-light">Laporkan jika terdapat indikasi pelanggaran protokol kesehatan atau terdapat tamu dari luar daerah</h5>
</div>
@endsection

@section('konten')
@if ($code != NULL)
  <div class="alert alert-success" role="alert">
    <i class="fas fa-check"></i>
    Data laporan telah direkam!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

  <div class="box border-top shadow-lg">
    <form action="/submitlapor" method="POST">
      {{ csrf_field() }}
      <legend>Data Pelapor</legend>
      <hr>
      <div class="form-group row">
        <label class="col-md-4 col-xs-4" for="namapelapor">Nama</label>
        <input class="col-md-8 col-xs-8" type="text" class="form-control" id="namapelapor" name="namapelapor" placeholder="Wajib diisi" required>
      </div>
      <div class="form-group row">
        <label class="col-md-4 col-xs-4" for="nohp">Nomor Handphone</label>
        <input class="col-md-8 col-xs-8" type="number" class="form-control" id="nohp" name="nohp" placeholder="Wajib diisi" required>
      </div>
      <br>
      <legend>Laporan</legend>
      <hr>
      <div class="form-group row">
        <label class="col-md-4 col-xs-4" for="namaterlapor">Nama</label>
        <input class="col-md-8 col-xs-8" type="text" class="form-control" id="namaterlapor" name="namaterlapor">
      </div>
      {{-- <div class="form-group row">
        <label class="col-md-4 col-xs-4" for="RT">RT</label>
        <input class="col-md-8 col-xs-8" type="text" class="form-control" id="RT" name="RT">
      </div> --}}
      <div class="form-group row">
        <label class="col-md-4 col-xs-4" for="lokasi">Lokasi</label>
        <input class="col-md-8 col-xs-8" type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Wajib diisi" required>
      </div>
      <div class="form-group row">
        <label class="col-md-4 col-xs-4" for="deskripsi">Deskripsi Laporan</label>
        <textarea class="col-md-8 col-xs-8" name="deskripsi" id="deskripsi" cols="30" rows="4" placeholder="Wajib diisi" required></textarea>
      </div>
      <br>
      <div class="d-flex flex-row-reverse">
        <button type="submit" class="btn btn-primary" value="simpan">Kirim</button>
      </div>
    </form>
  </div>
@endsection