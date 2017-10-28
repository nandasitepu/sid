@extends('_l.main')

@section('title')
   {{$berita->judul}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="min-height:450px">
                <div class="panel-body">
                    <h4>{{$berita->judul}}</h4>
                    <p>{{$berita->berita}}</p>
                </div>
            </div>
            
        </div>
    </div>
@endsection