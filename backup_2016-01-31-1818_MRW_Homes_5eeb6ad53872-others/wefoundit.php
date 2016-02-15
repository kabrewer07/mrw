<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://resources.nationalseoexperts.com/resources.css" rel="stylesheet" />
    <style type="text/css">
      html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
    body,td,th {
	font-family: "Arial Black", Gadget, sans-serif;
	font-size: 14px;
	color: #C30;
}
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzOHNGtOIabPOL-uU2jilTs_Pyzk5DCQw">
    </script>
	
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: { lat: <?php echo $_GET['lat'];?>, lng: <?php echo $_GET['lng'];?>},
          zoom: 20,
		  mapTypeId: google.maps.MapTypeId.SATELLITE
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

		var myLatlng = new google.maps.LatLng(<?php echo $_GET['lat'];?>,<?php echo $_GET['lng'];?>); 
		var myAddress = '<?php echo $_GET['address'];?>';

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title:myAddress
		});			
			
      }
      //google.maps.event.addDomListener(window, 'load', initialize);


    </script>
  <meta charset="utf-8">
  </head>
  <body onload="initialize()" style="background-color: #666;">
  <div style="background-color: #fff;">
	<div id="mainContentDiv">
		<div id="weFoundItDiv">
			We Found It!  <h4>Request Your Free Home Valuation</h4>
		</div>
		<div style="clear: both;"></div>
		<div id="map-canvasWrapper">
                
			<div id="map-canvas" style="width: 320px; height: 400px; margin-bottom: 40px; ">
			  <blockquote>
			    <p>&nbsp;</p>
		      </blockquote>
			</div>
		</div>
		<div id="frmMainWrapper">
		  <form id="frmMain" action="http://www.myprivatedashboard.com/Post/Leads/sendLead.php" method="post">
				<div id="firstNameWrapper">
					<input name="firstName" id="firstName" required type="text" placeholder= "Your Name(Required)"/>
				</div>
                                 <p></p>

				<div id="phoneWrapper">
					<input name="phone" id="phone" required type="text" placeholder= "Phone (Required)"/>
				</div>
                                 <p></p>

				<div id="emailWrapper">
					<input name="email" id="email" type="text" placeholder= "Email"/>
				</div>
                                 <p></p>

				<div id="messageWrapper">
                                        <input name="message" id="message" type="text" placeholder= "Message"/>
				</div>
                                <p></p>
				<div id="btnSubmitWrapper">
					<input id="btnSubmit" type="submit" value="submit"/>
				</div>
<p></p>
			</form>
		</div>
		<div style="clear: both;"></div>
		
	</div>
  </div>
  </body>
</html>