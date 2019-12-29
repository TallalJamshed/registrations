<script src="{{asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('js/argon-dashboard.min.js?v=1.1.0')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
  {{-- <script src="{{asset('js/jquery.filtertable.js')}}"></script> --}}
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
<script>
  $(document).ready( function () {
    $('#loctable').DataTable({
      // 'display':['stripe','hover'],
    });
  });
</script>
{{-- <script>
  $(document).ready(function(){
    $('table').filterTable(); //if this code appears after your tables; otherwise, include it in your document.ready() code.
  });
</script> --}}

<script>
  $('.dropdown-btn').click(function(){
    $(this).toggleClass("active");
    $('.dropdown-btn').not(this).removeClass("active");
    $(this).next().toggle("slow");
    $('.dropdown-btn').not(this).next().css( "display","none");
    var btn = $this;
    
  });
  $(document).ready(function(){
      // alert();
      console.log($('a.active').parent());
      if($('a.active').parent('.dropdown-container').length){
        $('a.active').parent().toggle("slow");
      }
    });
</script>

<script>
  $(document).ready(function() {
    $('.povselect').select2();
    $('.pov_for_area').select2();
    $('.cityselect').select2();
    $('.pov_for_subarea').select2();
    $('.city_for_subarea').select2();
    $('.areaselect').select2();
  });
</script>

<script>
  setTimeout(function() {
    $('#message').fadeOut('slow');
  }, 3000); 
</script>

<script>
  $('.povselect').change(function(){
    $('#city_name').prop('disabled',false);
  });
  $('.cityselect').change(function(){
    $('#area_name').prop('disabled',false)
  });
  $('.areaselect').change(function(){
    $('#subarea_name').prop('disabled',false)
  });
</script>

<script>
  $('#pov_for_area').change(function(){
    var province = $('#pov_for_area').val();
    $.ajax({
      url:'/cities',
      type: 'post',
      datatype: 'json',
      data:{'fk_province_id': province , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        $('.cityselect').prop('disabled',false)
        data.forEach(element => {
          $('.cityselect').append(new Option(element.city_name , element.city_id));
        });
      },
    })
  });
</script>

<script>
  $('#pov_for_subarea').change(function(){
    var province = $('#pov_for_subarea').val();
    $.ajax({
      url:'/cities',
      type: 'post',
      datatype: 'json',
      data:{'fk_province_id': province , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        $('.city_for_subarea').prop('disabled',false);
        data.forEach(element => {
          $('.city_for_subarea').append(new Option(element.city_name , element.city_id));
        });
      },
    })
  });
</script>

<script>
  $('#city_for_subarea').change(function(){
    var city = $('#city_for_subarea').val();
    $.ajax({
      url:'/areas',
      type: 'post',
      datatype: 'json',
      data:{'fk_city_id': city , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        data.forEach(element => {
          $('.areaselect').prop('disabled',false);
          $('.areaselect').append(new Option(element.area_name , element.area_id));
        });
      },
    })
  });
</script>