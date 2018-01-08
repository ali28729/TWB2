  <script>
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