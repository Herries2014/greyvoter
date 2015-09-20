@extends('app')

@section('content')

<script>

function showterms() {
	
	$("#terms").dialog({
		  "title": "Terms & Conditions",
		  "width": $(window).width()-50,
		  buttons: [
			{
			  text: "Ok",
			  icons: {
				primary: "ui-icon-heart"
			  },
			  click: function() {
				$( this ).dialog( "close" );
			  }
		 
			  // Uncommenting the following line would hide the text,
			  // resulting in the label being used as a tooltip
			  //showText: false
			}
		  ]
	});
	
}
</script>

<?php
$DBServer = 'sql7.cpt4.host-h.net'; // e.g 'localhost' or '192.168.1.100'
$DBUser   = 'emptydnqrg_1';
$DBPass   = 'aqDuUUN8';
$DBName   = 'emptydnqrg_db1';

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

$sql='SELECT terms FROM terms';
 
$rs=$conn->query($sql);

$output = "";
$rs->data_seek(0);
while($row = $rs->fetch_assoc()){
    $output.=$row['terms'];
}

$conn->close();

//'host'      => env('DB_HOST', 'sql7.cpt4.host-h.net'),
//			'database'  => env('DB_DATABASE', 'emptydnqrg_db1'),
//			'username'  => env('DB_USERNAME', 'emptydnqrg_1'),
//			'password'  => env('DB_PASSWORD', 'aqDuUUN8'),

?>

<div id="terms" style="display:none;"><div style="height:350px; overflow-y:scroll;"><?php echo $output; ?></div></div>
<div class="container-fluid generalbox">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						

						<div class="form-group">
							<label class="col-md-4 control-label">Username</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>                        

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" value="{{ old('password') }}">
							</div>
						</div>					                        
                        
                        

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
