var styles = [
    {
        "featureType": "all",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "weight": "2.00"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ededed"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#ededed"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ededed"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ededed"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#eeeeee"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#7b7b7b"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#67cfe3"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#070707"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ededed"
            }
        ]
    }
]
$(document).ready(function() {

  function initialize() {


    var gmarkers = [];
    var map = null;
    var infowindow = null;


      var mapOptions = {
        center: new google.maps.LatLng(23.037764, -109.706917),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false,
        zoomControl: true,
        scaleControl: false,
        styles: styles,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        draggable: false
      };

      map = new google.maps.Map(document.getElementById("mack-map"), mapOptions);

      google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
      });

      var locations = [
        ['TW Board', 23.037764, -109.706917]
       ];

      /*infowindow = new google.maps.InfoWindow({
        size: new google.maps.Size(150,50)
      });*/

      function setMarkers(locations) {
        for (var i = 0; i < locations.length; i++) {
          var location = locations[i];
          var myLatLng = new google.maps.LatLng(location[1], location[2]);
          var marker = new google.maps.Marker({
              position: myLatLng,
              animation: google.maps.Animation.DROP,
              map: map,
              title: location[0],
              icon: "images/recursos/pin-map.png",
              title: 'TWBoard'
          });

          // Standard markers - if not using infobox
          google.maps.event.addListener(marker, "click", function () {
          map.setCenter(marker.getPosition());
          infowindow.setContent(this.html);
          infowindow.open(map, this);
          });
          gmarkers.push(marker);
        }
      }

      // Add the markers
      setMarkers(locations);

  }

  // add window listener for GMaps
  google.maps.event.addDomListener(window, 'load', initialize);

});
