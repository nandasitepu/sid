@extends('_l.main')

@section('title')
    Berita Desa
@endsection

@section('content')
    
    <div class="row">
        <div class="col-md-8">
            @include('_c._breadcrumb')
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('_c._berita')
                  
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('berita.nav')
            
            @include('berita.populer')
        </div>
    </div>
     
@endsection



