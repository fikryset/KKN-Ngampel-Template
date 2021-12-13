@extends('masterhome')

@section('judul')
<div class="col">
    <h1 class="text-center text-light">Tanya Jawab</h1>
</div>
@endsection

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($qna as $item)
            <div class="card w-100 mb-3 shadow">
                <div class="card-header" id="headq{{$item->id}}" style="background-color: white">
                    <h4>
                    <a class="qnaclick stretched-link" data-toggle="collapse" href="#q{{$item->id}}" role="button" aria-expanded="false" aria-controls="q{{$item->id}}">
                            {{$item->tanya}}
                        </a>
                    </h4>
                </div>
                <div id="q{{$item->id}}" class="collapse" aria-labelledby="headq{{$item->id}}">
                    <div class="card-body">
                        <p>{{$item->jawab}}</p>
                    </div>
                </div>
            </div>    
            @endforeach
        </div>
        <div>
            <a href="/qnaform" type="button" class="btn btn-primary border">Ingin mengajukan pertanyaan lainnya?</a>
        </div>
    </div>
@endsection