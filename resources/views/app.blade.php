<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EmptyTrips</title>
<!--<link href="http://www.emptytrips.com/preview/main/public/footable/css/bootstrap.css" rel="stylesheet" type="text/css"/>-->

	<link href="http://www.emptytrips.com/preview/main/public/footable/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
    
    
    
    

	<link rel="stylesheet" href="http://www.emptytrips.com/preview/main/public/css/jquery.css">

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='http://www.emptytrips.com/preview/main/public/css/googlefont.css' rel='stylesheet' type='text/css'>
    
    
    
    
	
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script> 
    
    <script src="http://www.emptytrips.com/preview/main/public/footable/js/footable.js?v=2-0-1" type="text/javascript"></script>
    <script src="http://www.emptytrips.com/preview/main/public/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
    <script src="http://www.emptytrips.com/preview/main/public/footable/js/footable.sort.js" type="text/javascript"></script>
    
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="http://www.emptytrips.com/preview/main/public/jqueryui/jquery-ui.min.js"></script>
    
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
   
    
   <!-----------------HERMAN START------------------->
   
   <!------------------HERMAN END--------------------
    
    
    
    
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    
    
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}" style='background-image: url("http://www.advertplatform.com/grey/newlogo1.png");
  width: 10.5em;
  height: 2.5em;
  background-repeat: no-repeat;
  -webkit-background-size: 10.5em auto;
  -moz-background-size: 10.5em auto;
  -o-background-size: 10.5em auto;
  background-size: 10.5em auto;
  margin-left: 0px;
  margin-top: 6px;
  
  '></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!--<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
				</ul>-->

				<ul class="nav navbar-nav navbar-right">
                	
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Sign In</a></li>
						<li><a href="{{ url('/auth/register') }}">Sign Up</a></li>
					@else
                    	
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/edituser') }}">Profile Details</a></li>
                            <li><a href="{{ url('/editbank') }}">Bank Details</a></li>
                            <li><a href="{{ url('/transactionhistory') }}">Transaction History</a></li>
                            	<li><a href="{{ url('/mylistings') }}">Your Listings</a></li>
                                
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
                    
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
    

	
    
    
    
    
    <script type="text/javascript">
	
	
	
	function getUrlParameter(sParam)
{
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) 
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) 
        {
            return sParameterName[1];
        }
    }
}   



  $(function() {
	  
	  
	  
	  
	  
    $( "#expiration_date" ).datepicker({
      changeMonth: true,
      changeYear: true,
	  dateFormat: "yy-mm-dd"
    });
	$('.footable').footable();	
	
	
            
        
	//var pageSize = "5";
	//$('.footable').data('page-size', pageSize);
	//$('.footable').trigger('footable_initialized');
	//$('.footable').data('limit-navigation', "3");		
	
	//if (getUrlParameter('layout') == "hybrid") {
	//	var pageSize = "5";
	//	$('.footable').data('page-size', pageSize);
	//}
			
	$('table').data('footable-sort').doSort(0, "ASC");
	$('.sort-column').click(function (e) {
		e.preventDefault();
	
		//get the footable sort object
		var footableSort = $('table').data('footable-sort');
	
		//get the index we are wanting to sort by
		var index = $(this).data('index');
	
		//get the sort order
		var ascending = $(this).data('ascending');
	
		footableSort.doSort(index, ascending);
	});		
	
	
	$('#listing_title').tooltip();
	$('#price').tooltip();
	$('#listing_description').tooltip();
	$('#truck_capacity').tooltip();
	$('#expiration_date').tooltip();
	$('#location_depart').tooltip();
	$('#location_arrive').tooltip();
	/*$( document ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });*/
	
	
	//setTimeout(function() {
		//alert('asd');
	/*var description = getUrlParameter('description');
	var type = getUrlParameter('type');
	var extra_equipment = getUrlParameter('extra_equipment');
	var listing_type = getUrlParameter('listing_type');
	
	var description_array = description.split(",");
	var type_array = type.split(",");
	var extra_equipment_array = extra_equipment.split(",");
	
	for (i = 0; i < description_array.length; i++) { 
		//alert(description_array[i]);
		//$("input:checkbox[value=2]").attr("checked", true);
		$("input[name='description_group']").each(function () {
			 if ($(this).val() == description_array[i]) { $(this).prop("checked", true); }
		});
		
	}
	
	for (i = 0; i < type_array.length; i++) { 
		$("input[name='type_group']").each(function () {
			 if ($(this).val() == type_array[i]) { $(this).prop("checked", true); }
		});
	}
	
	for (i = 0; i < extra_equipment_array.length; i++) { 
		$("input[name='equipment_group']").each(function () {
			 if ($(this).val() == extra_equipment_array[i]) { $(this).prop("checked", true); }
		});
	}*/
	//},3000);
	
	
	
	
	
	
	
	var typingTimer;                //timer identifier
	var doneTypingInterval = 1500;  //time in ms, 5 second for example
	
	var typingTimer2;                //timer identifier
	var doneTypingInterval2 = 1500;  //time in ms, 5 second for example
	
	if (document.getElementById('location_depart').value !== "") {
		clearTimeout(typingTimer);
		typingTimer = setTimeout(codeAddress, doneTypingInterval);
	}
	
	if (document.getElementById('location_arrive').value !== "") {
		clearTimeout(typingTimer2);
		typingTimer2 = setTimeout(codeAddress2, doneTypingInterval2);
	}
	
	
	//on keyup, start the countdown
	$('#location_depart').keyup(function(){
		clearTimeout(typingTimer);
		typingTimer = setTimeout(codeAddress, doneTypingInterval);
	});
	
	//on keydown, clear the countdown 
	$('#location_depart').keydown(function(){
		clearTimeout(typingTimer);
	});
	
	//on keyup, start the countdown
	$('#location_arrive').keyup(function(){
		clearTimeout(typingTimer2);
		typingTimer2 = setTimeout(codeAddress2, doneTypingInterval2);
	});
	
	//on keydown, clear the countdown 
	$('#location_arrive').keydown(function(){
		clearTimeout(typingTimer2);
	});	
	
	//$( "#location" ).change(function() {
	//	codeAddress();	
	//});
	
	
	
  });
  </script>
</body>
</html>
