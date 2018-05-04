<?php  
    include 'includesAdminPanel/sessionSrartForAdmin.php';
?>

<!DOCTYPE html>
<html>
    <head>

        <?php  
            include 'includesAdminPanel/headerPart1.php';
        ?>


        <title>New E.S. Institute - Complain Box</title>

        <script type="text/javascript">
            function checkPhoneNumber()
            { 
                var phoneno = /(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/;
                if(document.getElementById("phone").value.match(phoneno)) {
                  return true;      
                }

                else
                {
                    alert("Not a valid Phone Number");
                    document.getElementById("phone").value = "";
                }
            }
        </script>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 400px;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
    </style>
  </head>
  <body>
    <!-- my navigation -->
        <nav class="navbar navbar-light" style="background-color: #009688;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../index.php"><img src="../pictures/icon/complain.png" id="indexLogo-complain-box"></a>
                </div>
            
                <ul class="nav navbar-nav">             
                    <li><a href="../../index.php#description-div-custom" class="nev-custom-css" id="ourAppAnc">Our App</a></li>
                    <li><a href="../../index.php#purpose-container" class="nev-custom-css">Purpose</a></li>
                    <li><a href="../../index.php#developers-container" class="nev-custom-css">Supervisor & Developers</a></li>
                </ul>


                <?php
                    include 'includesAdminPanel/adminLogout.php';
                ?>
                
          </div>
        </nav><!-- end of nevigation -->


        <div class="wrapper">
            <nav id="sidebar">
                <a href="../../index.php#complainBoxDev">
                    <div class="sidebar-header">
                        <h3>Complain Box</h3>
                        <strong>CB</strong>
                    </div>
                </a>

                <ul class="list-unstyled components">
                    <li >
                      <a href="home.php">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>


                    <li>
                        <a href="problem.php">
                             <i class="glyphicon glyphicon-exclamation-sign"></i>
                            Problems
                        </a>
                    </li >

                    
                    <li>
                        <a href="event.php">
                            <i class="glyphicon glyphicon-calendar"></i>
                            Events
                        </a>
                    </li>

                    <li>
                        <a href="notice.php">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Notices
                        </a>
                    </li>
                    <li>
                        <a href="applicationForm.php">
                            <i class="glyphicon glyphicon-file"></i>
                            Application Forms
                        </a>
                    </li>

                    <li class="active">
                        <a href="emergencySupport.php">
                            <i class="glyphicon glyphicon-bell"></i>
                            Emergency Support
                        </a>
                    </li>

                    

                </ul>
            </nav>


            <!-- Page Content Holder -->
            <div id="content" style="width: 100%">


              <div class="container-fluid">
                    <div class="row no-gutters">
                        <div class="col-md-5" style="height: 100px;">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="background-color: #009688;">
                                <i class="glyphicon glyphicon-align-left"></i>
                            </button></div>
                        <div class="col-md-5">
                            <h1>New E.S. Institute</h1>
                        </div>

                        <div class="col-md-2">
                        </div>


                    </div>
                    <hr>
                </div>



                <form action="../serverPHP/addNewInstitute.php" method="POST" enctype="multipart/form-data">



                    <div class="form-group">
                        <label for="exampleInputEmail1">Institute Name</label>
                        <input type="text" name="text" maxlength="100" class="form-control" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Institute Location</label>
                        <p style="color: black;"> Please search your institute in the following map.</p>
                    </div>












    <!--donot touch this part-->



    <div class="pac-card" id="pac-card">
      <div>
        <div id="title">
          Autocomplete search
        </div>
        <div id="type-selector" class="pac-controls">
          <input type="radio" name="type" id="changetype-all" checked="checked">
          <label for="changetype-all">All</label>

          <input type="radio" name="type" id="changetype-establishment">
          <label for="changetype-establishment">Establishments</label>

          <input type="radio" name="type" id="changetype-address">
          <label for="changetype-address">Addresses</label>

          <input type="radio" name="type" id="changetype-geocode">
          <label for="changetype-geocode">Geocodes</label>
        </div>
        <div id="strict-bounds-selector" class="pac-controls">
          <input type="checkbox" id="use-strict-bounds" value="">
          <label for="use-strict-bounds">Strict Bounds</label>
        </div>
      </div>
      <div id="pac-container">
        <input id="pac-input" type="text"
            placeholder="Enter a location">
      </div>
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>



    <div style="height: 40px; width: 40px;">

    <script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.81053426236296, lng: 90.41348926318358},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29),
          draggable: true
        });

      
         google.maps.event.addListener(map, 'center_changed', function () {
            var location = map.getCenter();
            document.getElementById("lat").value=location.lat();
            document.getElementById("lan").value=location.lng(); 

        });

        google.maps.event.addListener(marker, 'dragend', function(event) {
            document.getElementById("lat").value=event.latLng.lat();
            document.getElementById("lan").value=event.latLng.lng();
        });




        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(true);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkKmJPK0oh9K4yGU1USSj7MJpzFWN9LeE&libraries=places&callback=initMap"
        async defer></script>



     </div>

     <!-- do not touch this part-->


                    <div class="form-group">
                        <label for="exampleInputEmail1">Latitude</label>
                        <input type="text" id="lat" class="form-control" value="23.780691240163524" name="latitude" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Longitude</label>
                        <input type="text" id="lan" class="form-control" name="longitude" value="90.41932574999998" readonly>
                    </div>

      <!--<input type="text" id="lat" class="form-control" value="23.780691240163524" name="latitude" readonly>-->
      <!--<input type="text" id="lan" class="form-control" name="longitude" value="90.41932574999998" readonly>-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Institute Phone Number</label>
                        <input type="tel" name="phone" id="phone" maxlength="100" class="form-control" onblur="checkPhoneNumber()" placeholder="" required>
                    </div>
                                    

                    <div class="form-group">
                        <label for="InstitutionCategory">Category</label> <br>
                        <input type="radio" name="category" value="Hospital" checked> Hospital<br>
                        <input type="radio" name="category" value="Fire Station"> Fire Station<br>
                        <input type="radio" name="category" value="Police Station" > Police Station<br>  
                    </div>


                      <button type="submit" name="submit" class="btn btn-primary" style="background-color: #009688;">Add</button>
                        <a href="emergencySupport.php">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                        </a>




  </form>

   </div>


     
  </body>
</html>