@extends('_l.main') 
@section('title') 
    Sistem Informasi Desa 

@endsection
@section('extra')
<style>
    body {
        background: url('img/desa1.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }
    #transparansi {
        background: url('img/pages/data1.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }

</style>
@endsection

@section('content')

<!-- First Row -->
<div class="row" style="background-color:transparent;padding:10px;margin-bottom:20px">
    <div class="col-md-9">
     
        <div class="panel panel-default">
             <div class="panel-body">
                @include('_c._banner')
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body" style="background-color:#fff">
                
                @include('_c._slider')
            </div>
        </div>
    </div>
    <div class="col-md-3">

        <div class="panel panel-default">
            <div class="panel-body">
                @include('_c._login')
                <hr>
                @include('_c._social')
            </div>
        </div>
       
        <div class="panel panel-default" id="transparansi">
            <div class="panel-body text-center" >
                <span style="background-color:#fff;padding: 5px"><i class="fa fa-star-o fa-lg" ></i>&nbsp; Transparansi Desa &nbsp;<i class="fa fa-star-o fa-lg"></i></span>
            </div>
        </div>
       
          
        @include('_c._sidemenu')

       
    </div>
</div>
<!-- Second Row -->
<div class="row">
    <div class="col-md-9">
        <div class="col-md-4 well text-center">
           <a href="#">
                <i class="fa fa-newspaper-o fa-3x"></i><br>
                Berita
           </a>
        </div>
        <div class="col-md-4 well text-center">
            <a href="#">
                <i class="fa fa-calendar-times-o fa-3x"></i><br>
                Agenda
            </a>
        </div>
        <div class="col-md-4 well text-center">
            <a href="#">
            <i class="fa fa-institution fa-3x"></i><br>  
                Peraturan
            </a>
            
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                @include('_c._berita')
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-body">
                Galeri Foto
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                Komentar
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                Statistik Pengunjung
            </div>
        </div>

    </div>
</div>
@endsection