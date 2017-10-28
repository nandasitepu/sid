<div class="row">
    <div class="col-md-12">
        <h4 class="text-center">Berita Desa</h4>
        <h6 class="text-center">Dibuat dengan
            <i class="fa fa-fw fa-heart text-danger"></i> Oleh <a href="#" class="btn btn-primary btn-xs" target="_blank">Desa Karema</a>
        </h6>
    </div>
</div>
<hr>
@foreach ($berita as $brt)
<div class="row">
<div class="col-md-4">
    <div class="berita-image">
    <img src="img/berita/{{$brt->gambar }}" class="img-thumbnail" alt="Image" width="100%">
    </div>
</div>
<div class="col-md-8">

    <div id="berita">
        <div class="berita-title">
        <h4>{{$brt->judul}}</h4>
        </div>
        <div class="berita-info">
        <span class="label label-default">Uploader: NS</span>
        <span class="label label-default">{{ Carbon\Carbon::parse($brt->created_at)->diffForHumans() }}</span>
        <!--
        <span class="label label-default">{{ date('d F Y  - H:i',strtotime($brt->created_at)) }}</span>
        -->
        <span class="label label-default">Category: Berita</span>
     
        </div>
        <hr>
        <div class="berita-body">
        <p>
        {{ substr($brt->berita,0,200) }} {{ strlen($brt->berita) > 50 ? "..." : "" }}
           <a href="{{route('berita.show', $brt->id)}}"><button class="btn btn-xs btn-success">Selengkapnya <i class="fa fa-fw fa-eye"></i></button></a>
        </p>
        </div>
    
        <div class="berita-footer">
        <div class="text-right">
         
            @if ( Auth::check() )
            <a href="#"><button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-edit"></i> Edit</button></a>
            @endif
        </div>
        </div>
        <hr>
    </div>
     
</div>
</div>
@endforeach

