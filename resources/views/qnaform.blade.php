@extends('masterhome')

@section('judul')
<div class="col">
    <h1 class="text-center text-light">Tanya Jawab</h1>
</div>
@endsection

@section('konten')


    <div class="container">
      @if ($code != NULL)
  <div class="alert alert-success" role="alert">
    <i class="fas fa-check"></i>
    Pertanyaan telah dikirim!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
        <div class="justify-content-center">
            <div class="box border-top shadow-lg">
                <form action="/submitqna" method="POST">
                  {{ csrf_field() }}
                  <legend>Data Diri</legend>
                  <hr>
                  <div class="form-group row">
                    <label class="col-md-4 col-xs-4" for="nama">Nama</label>
                    <input class="col-md-8 col-xs-8" type="text" class="form-control" id="nama" name="nama" placeholder="Wajib diisi">
                  </div>
                  <div class="form-group row">
                    <label class="col-md-4 col-xs-4" for="nohp">Nomor Handphone</label>
                    <input class="col-md-8 col-xs-8" type="number" class="form-control" id="nohp" name="nohp" placeholder="Wajib diisi">
                  </div>
                  <br>
                  <legend>Pertanyaan</legend>
                  <hr>
                  <div class="form-group row">
                    <label class="col-md-4 col-xs-4" for="pertanyaan">Pertanyaan</label>
                    <textarea class="col-md-8 col-xs-8" name="pertanyaan" id="pertanyaan" cols="30" rows="4" placeholder="Wajib diisi"></textarea>
                  </div>
                  <br>
                  <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary" value="simpan">Kirim</button>
                  </div>
                </form>
              </div>  
        </div>
    </div>
@endsection