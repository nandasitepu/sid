
<div>
    <ul class="pull-right">
            <!-- Authentication Links -->
            @if (Auth::check())  
                <li class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-newspaper-o"></i>&nbsp; Tambah
                    </button>
                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-plus-circle"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Sejarah</a></li>
                        <li><a href="#">Wilayah</a></li>
                    </ul>
                </li>
            
                <li class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-table"></i>&nbsp; Tabel
                    </button>
                    <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-plus-circle"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Data Kependudukan</a></li>
                        <li><a href="#">Data Sumber Daya</a></li>
                        <li><a href="#">Data Keuangan</a></li>
                        <li><a href="#">Data Peraturan</a></li>
                        <li><a href="#">Data Bantuan Sosial</a></li>
                    </ul>
                </li>
    
            @else
                <a href="{{route('berita.index')}}">
                        <li class="btn-group">
                        <button type="button" class="btn btn-default btn-sm">
                                Grid  <i class="fa fa-fw fa-dashcube"></i>
                        </button>
                    </li>
                </a>
                <a href="{{route('berita.table')}}">
                        <li class="btn-group">
                        <button type="button" class="btn btn-default btn-sm">
                                Tabel  <i class="fa fa-fw fa-table"></i>
                        </button>
                    </li>
                </a>
                <a href="{{route('berita.create')}}">
                    <li class="btn-group">
                        <button type="button" class="btn btn-default btn-sm">
                            Tambah  <i class="fa fa-fw fa-newspaper-o"></i>
                        </button>
                    </li>
                </a>
            
            
            @endif
    </ul>
</div>    