<div class="row">
  <div class="col-md-9">
      <ul class="page-breadcrumb list-inline">
        <li>
          <a href="/" class="btn btn-primary btn-sm"><i class="fa fa-home fa-lg"></i></a>
         
        </li>
        @for($i = 1; $i <= count(Request::segments()); $i++)
        <li> 
          
          <a href="" class="btn btn-success btn-xs">{{Request::segment($i)}}</a>
          @if($i < count(Request::segments()) & $i > 0)
            {!!'<i class="fa fa-angle-double-right fa-lg"></i>'!!}
          @endif
        </li>
        @endfor
      </ul>
  <hr style="border: 1px solid #ccc">
  </div>
  <div class="col-md-3">
    <div class="panel panel-info text-center">
      <div class="panel-body">
        <button class="btn btn-default btn-sm">
          Login
        </button>
        <button class="btn btn-primary btn-sm">
          Forum
        </button>
      </div>
    </div>
  </div>
</div>
