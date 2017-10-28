<nav class="navbar navbar-default navbar-static-top">
    <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <i class="fa fa-star-o"></i>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <span>
                <img src="/img/mamuju.png" alt="" height="30px">
                &nbsp;
                <strong class="logo-desa" style="font-size:1em">DESA KAREMA</strong>
            </span>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Right Side Of Navbar -->
        <ul class="visible-xs list-unstyled" style="margin-top:15px">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <button type="button" class="btn btn-default btn-block btn-sm">Profil Desa</button>
                <button type="button" class="btn btn-default btn-block btn-sm">Pemerintahan Desa</button>
                <button type="button" class="btn btn-default btn-block btn-sm">Data Desa</button>
            @else
                <button type="button" class="btn btn-default btn-sm">Selamat Datang, {{ Auth::user()->name }}</button>
                <button type="button" class="btn btn-default btn-sm">Profil Desa</button>
                <button type="button" class="btn btn-default btn-sm">Pemerintahan Desa</button>
                <button type="button" class="btn btn-default btn-sm">Data Desa</button>
            @endif
        </ul>
        <ul class="hidden-xs pull-right" style="margin-top:15px">
            <!-- Authentication Links -->
            @if (Auth::guest())
            
                <li class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-bookmark-o"></i>&nbsp; Profil Desa
                    </button>
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Sejarah</a></li>
                        <li><a href="#">Wilayah</a></li>
                    </ul>
                </li>
                <li class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-institution"></i>&nbsp;Pemerintahan Desa
                    </button>
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Visi dan Misi</a></li>
                        <li><a href="#">Aparatur Desa</a></li>
                    </ul>
                </li>
                <li class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-bar-chart-o"></i>&nbsp; Data Desa
                    </button>
                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Data Kependudukan</a></li>
                        <li><a href="#">Data Sumber Daya</a></li>
                        <li><a href="#">Data Keuangan</a></li>
                        <li><a href="#">Data Peraturan</a></li>
                        <li><a href="#">Data Bantuan Sosial</a></li>
                    </ul>
                </li>
                <li class="btn-group">   
                    <a href="{{Route('login')}}" class="btn btn-sm btn-default"><i class="fa fa-key"></i></a>
                </li>
            @else
                <li class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-bookmark-o"></i>&nbsp; Profil Desa
                    </button>
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Sejarah</a></li>
                        <li><a href="#">Wilayah</a></li>
                    </ul>
                </li>
                <li class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-institution"></i>&nbsp;Pemerintahan Desa
                    </button>
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Visi dan Misi</a></li>
                        <li><a href="#">Aparatur Desa</a></li>
                    </ul>
                </li>
                <li class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-bar-chart-o"></i>&nbsp; Data Desa
                    </button>
                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Data Kependudukan</a></li>
                        <li><a href="#">Data Sumber Daya</a></li>
                        <li><a href="#">Data Keuangan</a></li>
                        <li><a href="#">Data Peraturan</a></li>
                        <li><a href="#">Data Bantuan Sosial</a></li>
                    </ul>
                </li>
                <li class="btn-group">   
                    <button type="button" class="btn btn-default btn-sm">
                        <i class="fa fa-fw fa-id-badge"></i>&nbsp;  {{ Auth::user()->name }}
                    </button>
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{url('logout')}}">Logout</a></li>
                    </ul>    
                </li>


               
            
            @endif
        </ul>
    </div>
</nav>

