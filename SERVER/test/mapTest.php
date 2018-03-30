<!DOCTYPE html>
<html>
<body>
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
	function myMap() {
		var mapProp= {
    		center:new google.maps.LatLng(51.508742,-0.120850),
    		zoom:17,
		};

/*
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		google.maps.event.addListener(map, 'click', function(event) {
			//alert(event.latLng.lat() + ", " + event.latLng.lng());

			var location = {lat:event.latLng.lat(), lng:event.latLng.lng()};
			var marker = new google.maps.Marker({
				position: location,
				map, map
			});

			document.getElementById("lat").value=event.latLng.lat();
			document.getElementById("lan").value=event.latLng.lng();
		});

*/

		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		google.maps.event.addListener(map, 'click', function(event) {
			//alert(event.latLng.lat() + ", " + event.latLng.lng());


			var location = {lat:event.latLng.lat(), lng:event.latLng.lng()};
			//var map2=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker = new google.maps.Marker({
				position: location,
				map, map
			});

			document.getElementById("lat").value=event.latLng.lat();
			document.getElementById("lan").value=event.latLng.lng();
		});
}


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkKmJPK0oh9K4yGU1USSj7MJpzFWN9LeE&callback=myMap"></script>

<input type="text" id="lat" name="latitude">
<input type="text" id="lan" name="longitude">

</body>
</html>