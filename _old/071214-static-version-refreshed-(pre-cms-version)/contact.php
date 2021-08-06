<?php include('inc/header.php'); ?> 
	<title>Law Office of Barry M. Wolf - Contact Information</title>
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	
	<script type="text/javascript">
	  function initializemap() {
		var theStyle = [
		  {
		   featureType: "all",
			elementType: "all",
			stylers: [
			  { saturation: -25 },
			  { lightness: 9 },
			  { hue: "#323E49" }
			]
		  },{
			featureType: "road",
			elementType: "all",
			stylers: [
			  { hue: "#A05D1A" }
			]
		  }
		];
		
		var myLatlng = new google.maps.LatLng(34.039734,-118.438733);
		var myOptions = {
		zoom: 15,
		center: myLatlng,
		panControl: false,
		zoomControl: true,
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
		overviewMapControl: false,
		scrollwheel: false,
		  mapTypeControlOptions: {
			   mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'barry']
		  }
		}
		var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		
		var marker = new google.maps.Marker({
			position: myLatlng, 
			map: map,
			title:"Law Office of Barry M. Wolf"
		});
		
		
		var styledMapOptions = {
		  name: "Barry"
		}
		
		var barryMapType = new google.maps.StyledMapType(
		  theStyle, styledMapOptions);
		
		map.mapTypes.set('barry', barryMapType);
		map.setMapTypeId('barry');
		
	  }
	
	</script>
</head>




<body class='page-contact' onload="initializemap()">

	<?php include('inc/menu.php'); ?>
	
	<div id="content">

		<div id="map_canvas" class='map-canvas'>
		</div>
	
		<div class='map-info'>	
			<h3>Contact Information</h3>
			
			<div class='map-float'>
				<p>Barry M. Wolf<br/>
				Law Office of Barry M. Wolf<br />
				11150 Olympic Boulevard, Suite 1050<br />
				Los Angeles, CA 90064<br /><br /></p>
			</div>
			<div class='map-float'>
				<p><em>Phone:</em> (310) 839-5028<br />
				<em>Fax:</em> (310) 593-2525<br />
				<em>Email:</em> <a href="mailto:wolfappeals@ca.rr.com">wolfappeals@ca.rr.com</a></p>
			</div>
		</div>
		
		<span class="clearfix"></span>
		
	</div>
	

<?php include('inc/footer.php'); ?> 