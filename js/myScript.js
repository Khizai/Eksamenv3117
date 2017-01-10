
var x = document.getElementById("demo");

function initMap() {

  var uluru = {lat: 55.79130271354726, lng: 12.167879957824653};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: uluru
  });
  
  var marker = new google.maps.Marker({
    position: uluru,
    animation:google.maps.Animation.DROP,
    map: map,
    title:"Her bor vi"
  });
};



