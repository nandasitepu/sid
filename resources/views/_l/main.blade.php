<!DOCTYPE html>
<html lang="en">

  <head>
    @include('_l._head')
  
  </head>
  <body>    
    <!--  Main Contents -->
    <div class="container">
      @include('_l._navtop')
      <div id="app">

         @yield('content')
      </div>
      @include('_l._navbot')
    </div>


    <!--  Navigation Bottom-->


    <!-- The Scripts -->
    @include('_l._scripts')
  </body>

  <footer>
    <!-- The Foot -->
    @include('_l._foot')
  </footer>
</html>
