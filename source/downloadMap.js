function initMap(){


    var oldLocation;
    var startLocation;
    var arr = [1,2,3];
    var waypts = [];
    var wayptsArray = [];                   //массив адресов текст
    var flag = 0;
        var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 53.9, lng: 27.5667},
        zoom: 6
      });  
      directionsDisplay.setMap(map);

      
var input = document.getElementById('pac-input');
  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);


      var marker = new google.maps.Marker({
    map: map
  });

  autocomplete.addListener('place_changed', function() {
    var place = autocomplete.getPlace();
   if (!place.geometry) {
      return;
    }
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(1);
    }
    
    wayptsArray.push(document.getElementById('pac-input').value);
    var outputWaypts = document.getElementById('wayList');
    outputWaypts.innerHTML += '<p>'+ document.getElementById('pac-input').value +'</p>';

    document.getElementById('pac-input').value='';
    if (oldLocation){
          
          waypts.push({
            location: oldLocation,
            stopover: true
          });
          marker.setVisible(false);
        } else {
            marker.setPlace({
      placeId: place.place_id,
      location: place.geometry.location
    });

window.location.search = '?u_name='+wayptsArray.pop()+'&waypt='+oldLocation;



    marker.setVisible(true);
        startLocation = place.geometry.location;
        }
        
        directionsService.route({
        origin: startLocation,
        destination: place.geometry.location,
         waypoints: waypts,
        optimizeWaypoints: true,
        travelMode: google.maps.TravelMode.DRIVING
      }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
          directionsDisplay.setDirections(response);
        } else {
          window.alert('Directions request failed due to ' + status);
        }
        oldLocation = place.geometry.location;
      });
  });
}