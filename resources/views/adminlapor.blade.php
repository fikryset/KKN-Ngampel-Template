@extends('masterhome')

@section('konten')
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">Nomor Handphone</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($laporan as $item)
            <tr>
                <td> {{$item->pelapor}}</td>
                <td> {{$item->nohp}}</td>
                <td> {{$item->time}}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection