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
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-center">Berita Desa Karema</h4>
                            <h6 class="text-center">Dibuat dengan
                                <i class="fa fa-fw fa-heart text-danger"></i> Oleh <a href="#" class="btn btn-primary btn-xs" target="_blank">NS</a>
                            </h6>

                        </div>
                        <div class="col-md-12">  
                            <span class="pull-right">Total: {{$berita->count() }}</span>          
                            <div class="table table-responsive">
                                <table class="table table-condensed table-bordered" >
                                    <thead>
                                        <tr class="text-center bg-success">
                                            <td>No</td>
                                            <td>Judul</td>
                                            <td>Action</td>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach($berita as $brt)
                                        <tr >
                                            <td class="text-center">{{$loop->iteration}}</td>
                                            <td>{{$brt->judul}} </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-default btn-xs">
                                                        Lihat
                                                    </button>
                                                    <button class="btn btn-default btn-xs">
                                                        Edit
                                                    </button>
                                                    <button class="btn btn-default btn-xs">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                 </table>
                            </div>

                               
                            <div class="text-center">
                                {!! $berita->links() !!}
                            </div>
                        </div>
                    </div>
                 
        
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('berita.nav')
            @include('berita.populer')
        </div>
    </div>
     
@endsection



