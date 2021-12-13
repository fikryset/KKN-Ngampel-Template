@extends('masterhome')

@section('judul')
<div class="row">
    <h1 class="text-center text-light col-12"><i class="fas fa-virus"></i> NGAMPEL SIAGA COVID-19  <i class="fas fa-virus"></i></h1>
</div>
<div class="row justify-content-center">
    <div class="col-md-2 col-6">
        <img class="imglogo" src="{{url('/file_storage/ugm-putih.png')}}" alt="">
    </div>
    <div class="col-md-2 col-6">
        <img class="imglogo" src="{{url('/file_storage/dpkm.png')}}" alt="">
    </div>
</div>
<div class="row mt-2">
    <div class="col">
        <h4 class="text-center text-light">Tidak perlu panik! Mari bersama-sama lawan COVID-19</h4>
    </div>
</div>
<div class="row mt-1 mx-0">
    <div class="col-sm-4 mt-1">
        <a href="/galeri" type="button" class="btn btn-primary btn-block border">Galeri Infografis</a>
    </div>
    <div class="col-sm-4 mt-1">
        <a href="/qna" type="button" class="btn btn-primary btn-block border">Tanya Jawab</a>
    </div>
    <div class="col-sm-4 mt-1">
        <a href="/formlapor" type="button" class="btn btn-primary btn-block border">Pantau warga</a>
    </div>
</div>
@endsection

@section('konten')
<section class="justify-content-center">
    <div class="rounded bg-white shadow p-3 mb-5 text-center">
        <h2>Sebaran Kasus <span class="text-danger">COVID-19</span> Di Kab. Blora</h2>
        <p class="font-weight-normal">Perbaruan terakhir: {{$covid->waktu}}</p>
        <p>Sumber: Website Blora Tanggap Corona</p>
        <div class="cardlist row">
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card shadow card-extend">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item counter-header-red text-center"><i class="fas fa-circle fac-reddot"></i> Positif COVID-19</li>
                        <li class="list-group-item"><h3 class="text-danger">{{$covid->positif_total}}</h3></li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    {{$covid->positif_rawat}}
                                    <h6>Dirawat</h6>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    {{$covid->positif_sembuh}}
                                    <h6>Sembuh</h6>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    {{$covid->positif_meninggal}}
                                    <h6>Meninggal</h6>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4 text-center">
                <div class="card shadow">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item counter-header-yellow text-center"><i class="fas fa-circle fac-yellowdot"></i> PDP (Pasien Dalam Pengawasan)</li>
                        <li class="list-group-item"><h3 style="color:#FFA51F">{{$covid->pdp_total}}</h3></li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    {{$covid->pdp_pengawasan}}
                                    <h6>Dirawat</h6>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    {{$covid->pdp_negatif}}
                                    <h6>Negatif</h6>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                    {{$covid->pdp_meninggal}}
                                    <h6>Meninggal</h6>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4 text-center">
                <div class="card shadow">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item counter-header-purple text-center"><i class="fas fa-circle fac-purpledot"></i> ODP (Orang Dalam Pengawasan)</li>
                        <li class="list-group-item"><h3 class="text-info">{{$covid->odp_total}}</h3></li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    {{$covid->odp_pantauan}}
                                    <h6>Pemantauan</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    {{$covid->odp_selesai}}
                                    <h6>Selesai</h6>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="justify-content-center">
    <div class="rounded bg-white shadow p-3 mb-5 text-center">
        <div class="row">
            <div class="col-12">
                <h2>Layanan Tanggap <span class="text-danger">COVID-19</span> Ngampel</h2>
            </div>
            <div class="col-7 bg-danger text-white mx-auto pt-1 my-1 rounded shadow">
                {{-- <span class="float-right">081231238</span> --}}
                <h3>Dinas Kesehatan Jawa Tengah</h3>
                <h4><i class="fas fa-phone"></i> 082313600560</h4>
            </div>
            <div class="col-7 bg-danger text-white mx-auto pt-1 my-1 rounded shadow">
                <h3>Dinas Kesehatan Jawa Tengah</h3>
                <h4><i class="fas fa-phone"></i> (024) 3580713</h4>
            </div>
            <div class="col-7 bg-danger text-white mx-auto pt-1 my-1 rounded shadow">
                <h3>Layanan Hotline Kab. Blora</h3>
                <h4><i class="fas fa-phone"></i> 0296-5300119</h4>
            </div>
        </div>
    </div>
</section>

<section class="justify-content-center">
    <div class="row container-fluid justify-content-between pr-0">
        <div class="col-md-4 col-xs-12 rounded bg-white p-3 mb-5 text-center">
            <div class="col-12">
                <h2>Infografis Terbaru</h2>
            </div>
            <div class="col-12">
                <div class="galeribox border shadow">
                    <div class="poster">
                        <a href="{{ url('/file_storage/'.$poster->file)}}" data-fancybox="gallery" data-caption="{{$poster->judul}}">
                          <img src="{{url('/file_storage/'.$poster->file)}}" alt="" />
                        </a>
                        {{-- <img src="{{ url('/file_storage/'.$item->file)}}" alt="{{$item->judul}}"> --}}
                    </div>
                    <div class="caption p-3">
                        <h3>{{$poster->judul}}</h3>
                        <p>{{$poster->deskripsi}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-xs-12 rounded bg-white py-3 mb-5 text-center">
            <div class="col-12">
                <h2>Video Terbaru</h2>
            </div>
            <div class="col-12 p-0">
                    <div class="galeribox border shadow">
                      <div class="video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="caption p-3">
                        <h3>{{$video->judul}}</h3>
                        <p>{{$video->deskripsi}}</p>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection