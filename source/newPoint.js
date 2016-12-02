function initMap(){
    var wayptsArray = [];                   //массив адресов текст

    if (navigator.geolocation) {
        
var input = document.getElementById('Point');

  var autocomplete = new google.maps.places.Autocomplete(input);
  
  autocomplete.addListener('place_changed', function() {
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }
    
    
    wayptsArray.push(document.getElementById('Point').value);
    var outputWaypts = document.getElementById('wayList');
    outputWaypts.innerHTML += '<p>'+ document.getElementById('Point').value +'</p>';
    
    document.getElementById('Point').value='';
   
      });   
    }

}