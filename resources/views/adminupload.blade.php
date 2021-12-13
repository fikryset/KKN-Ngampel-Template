@extends('masterhome')

@section('judul')
<div class="container-fluid">
    <div class="col">
        <h1 class="text-center text-light"> Upload </h1>
    </div>
</div>
@endsection


@section('konten')
    <div class="container-fluid">
        
        <div>	
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br/>
                @endforeach
            </div>
            @endif

            <div class="row d-flex justify-content-around">
            <div class="col-sm-5 box m-2 p-3 border">
                <h2>Upload Gambar</h2>
                <hr>
                <form action="/admin/uploadpost" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-xs-4" for="file">File</label>
                        <input class="col-md-7 col-xs-7" type="file" name="file">
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-xs-4" for="judul">Judul</label>
                        <input class="col-md-7 col-xs-7" type="text" name="judul">
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-xs-4" for="deskripsi">Deskripsi</label>
                        <textarea class="col-md-7 col-xs-7" class="form-control" name="deskripsi"></textarea>
                    </div>
                    
                    <input type="submit" value="Upload" class="btn btn-primary">
                </form>
            </div>

            <div class="col-sm-5 box m-2 p-3 border">
                <h2>Upload Video</h2>
                <hr>
                <form action="/admin/uploadpostvid" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-xs-4" for="linkv">ID Video</label>
                        <input class="col-md-7 col-xs-7" type="text" name="linkv">
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-xs-4" for="judulv">Judul</label>
                        <input class="col-md-7 col-xs-7" type="text" name="judulv">
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-xs-4" for="deskripsiv">Deskripsi</label>
                        <textarea class="col-md-7 col-xs-7" class="form-control" name="deskripsiv"></textarea>
                    </div>
                    
                    <input type="submit" value="Uploadv" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection