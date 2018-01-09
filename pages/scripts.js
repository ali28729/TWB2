<script>


      //for tooltips
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });



       function initMap() {
        var seecs = {lat: 33.6423899, lng:72.9900671};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: seecs
        });
        var marker = new google.maps.Marker({
          position: seecs,
          map: map
        });

        center: seecs
         google.maps.event.trigger(map, "resize");
         map.setCenter(seecs); 
         console.log("inMa");

      }

     var tid = setTimeout(mycode, 1000);
function mycode() {
  console.log("pls");
        var seecs = {lat: 33.6423899, lng:72.9900671};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: seecs

        });

    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(seecs);
    console.log("jm");
      };
  tid = setTimeout(mycode, 1000); // repeat myself


      $(document).click(function(){
        console.log("plssss");
        var seecs = {lat: 33.6423899, lng:72.9900671};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: seecs

        });

    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(seecs);
    console.log("jm");
      });

    </script>
    <!--Contact Page-->
    <!--Feed Page-->
    <script type="text/javascript">
    var jsFile;
    $(document).ready(function(){
      var ret = [];
      $.getJSON("data.json", function(result){
        console.log(0);
        jsFile = result;
          ret.push(result.data[0].title);
          ret.push(result.data[1].title);
          ret.push(result.data[2].title);
          ret.push(result.data[3].title);
          ret.push(result.data[4].title);
          ret.push(result.data[5].title);
          console.log(ret);
        
          
      });

      $('#search1').typeahead({
          source: function(query, process){
            process(ret);             
          }
      });
    });
  


   