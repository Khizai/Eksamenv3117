
var x = document.getElementById("demo");

function initMap() {

  var uluru = {lat: 55.8656692, lng: 12.322309700000005};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: uluru
  });
  
  var marker = new google.maps.Marker({
    position: uluru,
    animation:google.maps.Animation.DROP,
    map: map,
    title:"Work"
  });
};



