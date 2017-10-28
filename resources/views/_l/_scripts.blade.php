<!-- Main Scripts -->
<!-- jQuery & Bootstrap as app.js (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/app.js')}}"></script>

<script>
  // For Ajax Form
  window.Laravel =  <?php echo json_encode([ 'csrfToken' => csrf_token() ]); ?>
</script>


@yield ('bot-scripts')



