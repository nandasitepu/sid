<div class="panel panel-default">
    <div class="panel-body">
       <h4>
            <span class="label label-primary">
                Berita Terpopuler
            </span>
       </h4>
        <hr>
        <ol class="list-unstyled">
        @foreach($populer as $p)
            <li><a href="{{route('berita.show', $p->id)}}">{{$p->judul}} </a><span class="pull-right">{{$p->hits}} <i class="fa fa-eye-slash"></i></span></li>
        @endforeach
        </ol>
    </div>
</div>