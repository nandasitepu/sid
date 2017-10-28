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
