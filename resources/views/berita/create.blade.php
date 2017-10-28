@extends('_l.main')

@section('title')
   Buat Berita
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
        @include('_c._breadcrumb')
            <div class="panel panel-default" style="min-height:450px">
                <div class="panel-body">
                    <h4 class="text-center"><b>Tambah Berita</b></h4>
                    <hr>
                     <form class="form-horizontal" method="POST" action="{{ route('berita.store') }}">
                        {{ csrf_field() }}
                        <div class="col-md-4 col-md-offset-2 ">
                            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                                <label for="judul" class="control-label">Judul:</label>
                                <input id="judul" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                                <label for="gambar" class="control-label">Gambar:</label>
                                <input id="gambar" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                   
                      

                        
                        <div class="col-md-8 col-md-offset-2 ">
                            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                                <label for="berita" class="control-label">Berita:</label>
                                <textarea id="berita" type="text" rows="5" class="form-control" name="berita" value="{{ old('berita') }}" required autofocus>
                                </textarea>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 col-md-offset-2 ">
                            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                                <label for="judul" class="control-label">Tags:</label>
                                <input id="judul" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-3 col-md-offset-1">
                            <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                                <label for="updated_at" class="control-label">Tanggal Posting:</label>
                                <input id="updated_at" type="datetime-local" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                             <div class="form-group">
                           
                                <button type="submit" class="btn btn-primary btn-sm  btn-block">
                                    Tambah Berita
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>
    </div>
@endsection