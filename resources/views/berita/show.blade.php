@extends('_l.main')

@section('title')
   {{$berita->judul}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default" style="min-height:450px">
                <div class="panel-body">
                    <h3>{{$berita->judul}}</h3>
                  
                    <div class="berita-info">
                        <span class="label label-default">Uploader: NS</span>
                        <span class="label label-default">{{ date('d F Y  - H:i',strtotime($berita->created_at)) }}</span>
                        <span class="label label-default">Category: Berita</span>
                        <span class="btn btn-primary btn-xs pull-right">Edit</span>
                    </div>
                    <hr>
                    <div class="berita-image text-center">
                        <img src="/img/berita/{{$berita->gambar }}" class="img-thumbnail" alt="Image" width="400px">
                    </div> 
                    <p>{{$berita->berita}}</p>
                </div>
            </div>
            
        </div>
    </div>
@endsection