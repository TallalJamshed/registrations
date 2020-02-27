<script src="{{asset('js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('js/argon-dashboard.min.js?v=1.1.0')}}"></script>
  <!-- Google Maps API Js -->
  {{-- <script src="https://maps.google.com/maps/api/js?v=3&sensor=false"></script> --}}

  <script>
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: {lat: 33.5714482, lng: 73.0284069}
      });

      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      var count = 0;
      
      $.ajax({
        url:'/getschool',
        type: 'post',
        datatype: 'json',
        data:{_token:'{{csrf_token()}}'},
        header:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success:function(data){
          // console.log(data);
          data.forEach(element => {
            count++;
            var pinpoint;
            if(element.sc_br_status == 1){
              pinpoint = "{{asset('img/red_pin.png')}}";
            }
            if(element.sc_br_status == 2){
              pinpoint = "{{asset('img/yellow_pin.png')}}";
            }
            if(element.sc_br_status == 3){
              pinpoint = "{{asset('img/green_pin.png')}}";
            }
            marker = new google.maps.Marker({
              position: new google.maps.LatLng(element.latitude, element.longitude),
              map: map,
              icon: {                             
                  url: pinpoint                       
                  }
            });
            var subarea;
            if(element.subarea_name == "NA"){
              subarea = ", ";
            }else{
              subarea = ', '+element.subarea_name+', ';
            }
            // "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
            var markercontent = '<div><h2>'+element.school_name+'</h2></div>'+
                                '<div><h4>'+element.sc_br_address+subarea+element.area_name+'</h4></div>'+
                                 '<div><a href="/school/edit/'+element.sc_br_id+'" class="btn btn-sm btn-warning">More Info</a></div>'; 
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                infowindow.setContent(markercontent);
                infowindow.open(map, marker);
              }
            })(marker, i));
          });
          $('#provschool').val(count);
        },
      });
    }
  </script>
{{-- AIzaSyAGz0uwfCViWX9CfNqFbudJ0Gee5YStCFE --}}
{{-- my    AIzaSyBk0_VOTcgZgNVVcSfX52S8NHpuK4qHniY --}}
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGz0uwfCViWX9CfNqFbudJ0Gee5YStCFE&callback=initMap"
    async defer></script>

    <script>
        $('#pov_select').change(function (){
          // $('#dist_select').empty();
          var province = $('#pov_select').val();
          $.ajax({
            url:'/districts',
            type: 'post',
            datatype: 'json',
            data:{'fk_province_id': province , _token:'{{csrf_token()}}'},
            header:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
              alert(data.length);
              $('#dist_select').empty();
              $('#dist_select').append("<option value=''></option>");
              data.forEach(element => {
                $('#dist_select').append("<option value="+element.district_id+">"+element.district_name+"</option>");
              });
            },
          });
          drawAreaMap();
        });
        $('#dist_select').change(function (){
            var district = $('#dist_select').val();
            $.ajax({
              url:'/cities',
              type: 'post',
              datatype: 'json',
              data:{'fk_district_id': district , _token:'{{csrf_token()}}'},
              header:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success:function(data){
                alert(data.length);
                $('#city_select').empty();
                $('#city_select').append("<option value=''></option>");
                data.forEach(element => {
                  $('#city_select').append("<option value="+element.city_id+">"+element.city_name+"</option>");
                });
              },
            });
            drawAreaMap();
        });
        $('#city_select').change(function (){
            var city = $('#city_select').val();
            $.ajax({
              url:'/areas',
              type: 'post',
              datatype: 'json',
              data:{'fk_city_id': city , _token:'{{csrf_token()}}'},
              header:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success:function(data){
                alert(data.length);
                $('#area_select').empty();
                $('#area_select').append("<option value=''></option>");
                data.forEach(element => {
                  $('#area_select').append("<option value="+element.area_id+">"+element.area_name+"</option>");
                });
              },
            });
            drawAreaMap();
        });
        $('#area_select').change(function (){
            var area = $('#area_select').val();
            $.ajax({
              url:'/subareas',
              type: 'post',
              datatype: 'json',
              data:{'fk_area_id': area , _token:'{{csrf_token()}}'},
              header:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success:function(data){
                alert(data.length);
                $('#sub_select').empty();
                $('#sub_select').append("<option value=''></option>");
                data.forEach(element => {
                  $('#sub_select').append("<option value="+element.subarea_id+">"+element.subarea_name+"</option>");
                });
              },
            });
            drawAreaMap();
        });
        $('#sub_select').change(function (){
          var subarea = $('#sub_select').val();
            $.ajax({
              url:'/schools',
              type: 'post',
              datatype: 'json',
              data:{'fk_subarea_id': subarea , _token:'{{csrf_token()}}'},
              header:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success:function(data){
                alert(data.length);
                $('#school_select').empty();
                $('#school_select').append("<option value=''></option>");
                data.forEach(element => {
                  $('#school_select').append("<option value="+element.school_id+">"+element.school_name+"</option>");
                });
              },
            });
            drawAreaMap();
        });
        $('#school_select').change(function (){
            drawAreaMap();
        });
        // $('#school_id').change(function (){
        //     drawAreaMap();
        // });
        

      function drawAreaMap() {
        var province = $('#pov_select').val();
        var district = $('#dist_select').val();
        var city = $('#city_select').val();
        var area = $('#area_select').val();
        var subarea = $('#sub_select').val();
        var school = $('#school_select').val();
        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        var count = 0;


        var geocoder = new google.maps.Geocoder();
        $.ajax({
          url:'/getmapdata',
          type:'post',
          data:{'province':province ,'district':district , 'city':city ,'area':area ,'subarea':subarea ,'school':school ,_token:'{{csrf_token()}}'},
          success:(function(data){
            // console.log(data);
            var zoom = 7;
            if (data[0].province != "") {
              zoom = 6;
            }
            if (data[0].district != "") {
              zoom = 7;
            }
            if (data[0].city != "") {
              zoom = 8;
            }
            if (data[0].area != "") {
              zoom = 6;
            }
            if (data[0].subarea != "") {
              zoom = 6;
            }
            if (data[0].school != "") {
              zoom = 6;
            }

            if(data[0].province.province_name){var provname = data[0].province.province_name+","}else{var provname = ""};
            if(data[0].district.district_name){var distname = data[0].district.district_name+","}else{var distname = ""};
            if(data[0].city.city_name){var cityname = data[0].city.city_name+","}else{var cityname = ""};
            // if(data[0].area.area_name){var areaname = data[0].area.area_name+","}else{var areaname = ""};
            // if(data[0].subarea.subarea_name){var subareaname = data[0].subarea.subarea_name+","}else{var subareaname = ""};
            // if(data[0].school.school_name){var schoolname = data[0].school.school_name}else{var schoolname = ""};

            var address = cityname+distname+provname+'pakistan';
            // alert(address);
            geocoder.geocode({ 'address' : address }, function(results, status) {
              // alert(status);
              // console.log(results);
              if(status == "ZERO_RESULTS") {
                var address = 'pakistan';
                geocoder.geocode({ 'address' : address }, function(results, status) {
                  var mapOptions = {
                    center: results[0].geometry.bounds.getCenter(),
                    zoom: zoom,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                  }
                  // var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                });
              }else{
                var mapOptions = {
                  center: results[0].geometry.bounds.getCenter(),
                  zoom: zoom,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                };
              };
              var map = new google.maps.Map(document.getElementById("map"), mapOptions);
              data[0].schools.forEach(element => {
                count++;
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(element.latitude, element.longitude),
                    map: map,
                    // icon: {                             
                    //   url: "{{asset('img/pin_blue_1.png')}}"                       
                    // }
                  });
                  // if(element.province_name){var provname = ","+element.province_name}else{var provname = ""};
                  // if(element.district_name){var distname = ","+element.district_name}else{var distname = ""};
                  // if(element.city_name){var cityname = ","+element.city_name}else{var cityname = ""};
                  // if(element.area_name){var areaname = ","+element.area_name}else{var areaname = ""};
                  // if(element.subarea_name){var subareaname = ","+element.subarea_name}else{var subareaname = ""};
                  // if(element.school_name){var schoolname = ","+element.school_name}else{var schoolname = ""};

                  // console.log(element);
                  var markercontent = '<div><h2>'+element.school_name+'</h2></div>'+
                                '<div><h4>'+'</h4></div>'+
                                 '<div><a href="/school/edit/'+element.sc_br_id+'" class="btn btn-sm btn-warning">More Info</a></div>';
                                 google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                infowindow.setContent(markercontent);
                infowindow.open(map, marker);
              }
            })(marker, i));
              });
                 $('#provschool').val(count);
            });
          }),
        });
      };


     
      
      // $.ajax({
      //   url:'/getschool',
      //   type: 'post',
      //   datatype: 'json',
      //   data:{_token:'{{csrf_token()}}'},
      //   header:{
      //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //   },
      //   success:function(data){
      //     // console.log(data);
      //     data.forEach(element => {
      //       marker = new google.maps.Marker({
      //         position: new google.maps.LatLng(element.latitude, element.longitude),
      //         map: map,
      //         icon: {                             
      //             url: "{{asset('img/pin_blue_1.png')}}"                       
      //             }
      //       });
      //       // "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
      //       google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
      //         return function() {
      //           infowindow.setContent(element.school_name);
      //           infowindow.open(map, marker);
      //         }
      //       })(marker, i));
      //     });
      //   },
      // });
      // });
    </script>
  <!-- GMaps PLugin Js -->
  {{-- <script src="{{asset('js/plugins/gmaps/gmaps.js')}}"></script> --}}

  {{-- <script src="{{asset('js/google.js')}}"></script> --}}
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
    });
  });
</script>

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
    // console.log($('a.active').parent());
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
    $('.district_for_city').select2();
    $('.pov_for_subarea').select2();
    $('.city_for_subarea').select2();
    $('.areaselect').select2();
    $('.fk_school_id').select2();
    $('.fk_subarea_id').select2();
    $('.school_id').select2();
    $('.loc_select').select2();
  });
</script>

<script>
  setTimeout(function() {
    $('#message').fadeOut('slow');
  }, 3000); 
</script>

{{-- <script>
  $('.povselect').change(function(){
    $('#city_name').prop('disabled',false);
  });
  $('.cityselect').change(function(){
    $('#area_name').prop('disabled',false)
  });
  $('.areaselect').change(function(){
    $('#fk_subarea_id').prop('disabled',false)
  });
  // $('.fk_school_id').change(function(){
  //   $('.disable_on_sc_id').prop('disabled',false)
  //   // $('#sc_br_address').prop('disabled',false)
  // });
</script> --}}



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
        $('.cityselect').prop('disabled',false);
        $('.cityselect').empty();
        $('.cityselect').change();
        $('.cityselect').append(new Option("" , ""));
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
        $('.city_for_subarea').empty();
        $('.city_for_subarea').change();
        $('.city_for_subarea').append(new Option("" , ""));
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
        $('.areaselect').prop('disabled',false);
        $('.areaselect').empty();
        $('.areaselect').change();
        $('.areaselect').append(new Option("" , ""));
        data.forEach(element => {
          $('.areaselect').append(new Option(element.area_name , element.area_id));
        });
      },
    })
  });
</script>

<script>
  $('#areaselect').change(function(){
    var area = $('#areaselect').val();
    $.ajax({
      url:'/subareas',
      type: 'post',
      datatype: 'json',
      data:{'fk_area_id': area , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        console.log(data);
        $('.fk_subarea_id').prop('disabled',false);
        $('.subarea_name').prop('disabled',false);

        $('.fk_subarea_id').empty();
        $('.subarea_name').empty();

        $('.fk_subarea_id').change();
        $('.subarea_name').change();

        $('.fk_subarea_id').append(new Option("" , ""));
        $('.subarea_name').append(new Option("" , ""));

        data.forEach(element => {
          $('.fk_subarea_id').append(new Option(element.subarea_name , element.subarea_id));
          $('.subarea_name').append(new Option(element.subarea_name , element.subarea_id));

        });
      },
    })
  });
</script>

<script>
  $('#fk_subarea_id').change(function(){
    var subarea = $('#fk_subarea_id').val();
    // alert();
    $.ajax({
      url:'/schools',
      type: 'post',
      datatype: 'json',
      data:{'fk_subarea_id': subarea , _token:'{{csrf_token()}}'},
      header:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success:function(data){
        // alert();
        $('.school_id').prop('disabled',false);
        $('.school_id').empty();
        $('.school_id').change();
        $('.school_id').append(new Option("" , ""));
        data.forEach(element => {
          $('.school_id').append(new Option(element.school_name , element.school_id));
        });
      },
    })
  });
</script>

<script>
  $(".delid").click(function(){
      $("#id-to-delete").val($(this).data('delid'));
  });
</script>
