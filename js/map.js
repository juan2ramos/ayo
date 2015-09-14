var map;

function initialize() {


    var myLatLng = new google.maps.LatLng(4.6639333,-74.0594072);
    var mapOptions = {

        drag: false,
        dragend: false,
        dragstart: false,
        draggable: false,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,

        zoom: 18,
        center: myLatLng,
        styles: styleMap
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
    var image = 'images/location.png';


    var myLatLng = new google.maps.LatLng(4.66407,-74.058399);
    var beachMarker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        animation: google.maps.Animation.DROP,
        content: 'I am the content of this infobox. Wow, what a text.<br><br><a href="#">The good thing is: Tags are also possible</a>'
    });

}

google.maps.event.addDomListener(window, 'load', initialize);

var styleMap = [{"featureType": "all", "stylers": [{"saturation": 0}, {"hue": "#e7ecf0"}]}, {
    "featureType": "road",
    "stylers": [{"saturation": -70}]
}, {"featureType": "transit", "stylers": [{"visibility": "off"}]}, {
    "featureType": "poi",
    "stylers": [{"visibility": "off"}]
}, {"featureType": "water", "stylers": [{"visibility": "simplified"}, {"saturation": -60}]}]