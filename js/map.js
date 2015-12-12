function initialize() {var myLatlng = new google.maps.LatLng(46.8456152, 6.8396428);var mapOptions = {zoom: 16,center: myLatlng,scrollwheel: true,navigationControl: false,mapTypeControl: false,scaleControl: false,draggable: false,mapTypeId: google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById('map'), mapOptions);var contentString = '<div id="content">'+'<div id="siteNotice">'+'</div>'+'<img src="css/img/TaxiDoudou_yellow_little.png" alt="TaxiDoudou" />'+'<div id="bodyContent" style="font-family: \'Lato\', sans-serif; text-align: center; margin-top: 20px; font-size: 3vh;">'+'<p>'+'Cité de la Rosière 1<br />1470 Estavayer-le-Lac<br /> <p style="color:#FFD405; font-family: \'Lato\', sans-serif;"><b>079 846 29 84</b></p>'+'</div>'+'</div>';
var noPoi = [{featureType: "poi",stylers: [{ visibility: "off" }]   }]; map.setOptions({styles: noPoi});
var infowindow = new google.maps.InfoWindow({content: contentString});	var marker = new google.maps.Marker({position: myLatlng,map: map,title: 'TaxiDoudou'});google.maps.event.addListener(marker, 'click', function() {infowindow.open(map,marker);});	}
function loadScript() {var script = document.createElement('script');script.type = 'text/javascript';script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +'callback=initialize';document.body.appendChild(script);}window.onload = loadScript;
