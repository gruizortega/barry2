<?php include('inc/header.php'); ?> 
	<title>Law Office of Barry M. Wolf - Contact Information</title>
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	
	<script type="text/javascript">
	  function initialize() {
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
	      disableDefaultUI: true,
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




<body onload="initialize()">
	
	<div id="topspacer">
	</div>

	<div id="logo">
		<img src="img/header-new.png" alt="Law Office of Barry M. Wolf"/>
	</div>
	
	
	<div id="menu">
		<a id="home" class="menuitem" href="index.php"></a>
		<a id="questions" class="menuitem" href="questions.php"></a>
		<a id="briefs" class="menuitem" href="briefs.php"></a>
		<a id="decisions" class="menuitem" href="decisions.php"></a>
		<a id="contact" class="menuitem active" href="contact.php"></a>
		
		<span class="clear"></span>
	</div>
	
	
	
	
	
	<div id="content">
	
		<div style="float:left; width:265px; margin-right:10px;">	
			<h3>Contact Information</h3>
			
			<p>Barry M. Wolf<br/>
			Law Office of Barry M. Wolf<br />
			11150 Olympic Boulevard, Suite 1050<br />
			Los Angeles, CA 90064<br /><br />
			<em>Phone:</em> (310) 839-5028<br />
			<em>Fax:</em> (310) 593-2525<br />
			<em>Email:</em> <a href="mailto:wolfappeals@ca.rr.com">wolfappeals@ca.rr.com</a></p>
		</div>
		
		<div id="map_canvas" style="width: 275px; height: 250px; float: left; margin-top:12px">
		</div>
		
		<span class="clear"></span>
		
	</div>
	

<?php include('inc/footer.php'); ?> 