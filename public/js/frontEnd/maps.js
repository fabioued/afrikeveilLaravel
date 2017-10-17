  // map
  function initMap() {

    var mapDiv = document.getElementById('map'),
        location = {
          lat: 12.3584562,
          lng: -1.6769299
        },
        icon = {
    url: "../../images/uploads/location.png", // url
    scaledSize: new google.maps.Size(50, 50)
};

    var map = new google.maps.Map(mapDiv, {
      center: location,
      scrollwheel: true,
      draggable: false,
      disableDefaultUI: true,
      zoom: 9
    });

    var newMarker = new google.maps.Marker({
      position: location,
      map: map,
      icon: icon
    });

    newMarker.addListener('click', function() {
      // console.log({lat: this.getPosition().lat(), lng: this.getPosition().lng()});
      // console.log(location);
      map.setZoom(9);
      // map.setCenter(location);
      map.setCenter({
        lat: this.getPosition().lat(),
        lng: this.getPosition().lng()
      });
    });

    var msg1 = document.getElementById('dragend');
    map.addListener('dragend', function() {
      msg1.className = 'active';
      setTimeout(function(){ msg1.className = ''; }, 500);
    });

    var msg2 = document.getElementById('bounds_changed');
     map.addListener('bounds_changed', function() {
     msg2.className = 'active';
      setTimeout(function(){ msg2.className = ''; }, 500);
    });
  };

initMap();