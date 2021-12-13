@extends('masterhome')

@section('judul')
<div class="col">
    <h1 class="text-center text-light">Galeri infografis dan Video</h1>
</div>
@endsection

@section('konten')
  <h3>Infografis</h3>
  <hr>
  <div class=" col-12 row">
    @foreach ($galeri as $item)
        <div class="col-lg-4 col-sm-6 my-1">
          <div class="galeribox border shadow">
            <div class="poster">
              <a href="{{ url('/file_storage/'.$item->file)}}" data-fancybox="gallery" data-caption="{{$item->judul}}">
                <img src="{{url('/file_storage/'.$item->file)}}" alt="" />
              </a>
              {{-- <img src="{{ url('/file_storage/'.$item->file)}}" alt="{{$item->judul}}"> --}}
            </div>
            <div class="caption p-3">
              <h3>{{$item->judul}}</h3>
              <p>{{$item->deskripsi}}</p>
            </div>
          </div>
        </div>
    @endforeach
  </div>
  {{-- Halaman : {{ $galeri->currentPage() }} <br/>
  Jumlah Data : {{ $galeri->total() }} <br/>
  Data Per Halaman : {{ $galeri->perPage() }} <br/> --}}
  {{-- {{ $galeri->links() }} --}}
  {{ $galeri->appends(['video' => $video->currentPage()])->links() }} 

  <br>
  <h3>Booklet</h3>
  <hr>
  <div class="col-12 row">      
    <div class="col-lg-6 col-sm-6 my-1">
      <div class="galeribox border">
        <div class="booklet">
          <a data-fancybox data-type="iframe" data-src="{{url('/file_storage/Sosialisasi tanihub dan pak tani digital sebagai sarana pemasaran.pdf')}}" href="javascript:;">
            <img src="{{url('/file_storage/1595062629_1304Sayo-Hikawa-Happy-kjHCbB.png')}}" alt="">
          </a>
          {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$vitem->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
        </div>
        <div class="caption p-3">
          <h3>judul</h3>
          <p>caption</p>
        </div>
      </div>
    </div>
  </div>


  <br>
  <h3>Video</h3>
  <hr>
  <div class="col-12 row">
    @foreach ($video as $vitem)        
    <div class="col-lg-6 col-sm-6 my-1">
      <div class="galeribox border">
        <div class="video">
          {{-- <a data-fancybox data-type="iframe" data-src="https://www.youtube.com/embed/{{$vitem->link}}" href="javascript:;">
            <img src="https://upload.wikimedia.org/wikipedia/en/9/93/Yoru_ni_Kakeru_cover_art.jpg" alt="">
          </a>                         --}}
          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$vitem->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="caption p-3">
          <h3>{{$vitem->judul}}</h3>
          <p>{{$vitem->deskripsi}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  {{-- {{ $video->links() }} --}}
  {{ $video->appends(['galeri' => $galeri->currentPage()])->links() }} 



    {{-- <div class="card-deck">
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="https://drive.google.com/uc?export=view&id=1U5dRSqMir8ry2eth7xiygRgON06m2bSn" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">tesst</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="https://drive.google.com/uc?export=view&id=1Ya_LyH0jf9mV7l0-oxr0sl1DWp074Vl-" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">test</p>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="https://drive.google.com/uc?export=view&id=1_DiSAAjE-zVmZjiHE_UJEQibvAhGMVc3" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">test</p>
          </div>
        </div>
      </div>
    </div> --}}
@endsection