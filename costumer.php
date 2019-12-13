<?php
session_start();
if(isset($_SESSION['username']))
{

	include('connect.php');
?>

<html>
<head>
	<title>
		list
	</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="owner.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
	<body>
		
		
		<?php
		
		$query = 'SELECT `feedback` FROM `shopkeeper` ORDER BY `id` DESC';
		$run = mysqli_query($conn,$query);
		$count = mysqli_num_rows($run);
		?>
		
	
	<div>
		<nav>
			<section>
				<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#f75f00;">
					<a class="navbar-brand" href="costumer.php">VIT SHOP </a>


					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#har" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="har">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="profile.php">Profile</a></li>
							<li class="nav-item active"><a class="nav-link" href="history.php">History</a></li>
							<li class="nav-item active"><a class="nav-link" href="notification.php">Notifications(<?php echo $count;?>)</a></li>
							<form action="logout.php" method="POST">
								<button type="submit">Logout</button>
							</form>
							
						</ul>
					</div>
				</nav>
			</section>
		</nav>
	</div>
		
		<div>
		<form method="POST" action="#">
			<ul class="list-group">
				<div class="row">
					<div class="col-md-3">
						<li class="list-group-item"><input type="checkbox" name="item[]" id="item_0" value="Wheat"> Wheat</li>
					</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_0" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-3">
						<li class="list-group-item"><input type="checkbox" name="item[]" id="item_1" value="Sugar"> Sugar </li>
					</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_1" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<li class="list-group-item"><input type="checkbox" name="item[]" id="item_2" value="Salt"> Salt </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_2" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<li class="list-group-item"><input type="checkbox" name="item[]" id="item_3" value="Jowar"> Jowar </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_3" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
				<li class="list-group-item"><input type="checkbox" name="item[]" id="item_4" value="Poha"> Poha </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_4" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<li class="list-group-item"><input type="checkbox" name="item[]" id="item_5" value="Noodles"> Noodles </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_5" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1">1</option>
					        <option value="2">2</option>
					        <option value="3">3</option>
					        <option value="4">4</option>
					        <option value="5">5</option>
					      </select>
					  </div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-3">		
				<li class="list-group-item"><input type="checkbox" name="item[]" id="item_6" value="Sprouts"> Sprouts </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_6" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
				<li class="list-group-item"><input type="checkbox" name="item[]" id="item_7" value="Cumin"> Cumin </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_7" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
				<li class="list-group-item"><input type="checkbox" name="item[]" id="item_8" value="Perfume"> Perfume </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_8" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1">1</option>
					        <option value="2">2</option>
					        <option value="3">3</option>
					        <option value="4">4</option>
					        <option value="5">5</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
				<li class="list-group-item"><input type="checkbox" name="item[]" id="item_9" value="Ground nuts"> Ground nuts </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_9" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
				<li class="list-group-item"><input type="checkbox" name="item[]" id="item_10" value="Pulses"> Pulses </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_10" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
				<li class="list-group-item"><input type="checkbox" name="item[]" id="item_11" value="Jaggery"> Jaggery </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_11" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
				<li class="list-group-item"><input type="checkbox" name="item[]" id="item_12" value="Rice"> Rice </li>
				</div>
					<div class="col-md-3">
						<div class="form-group">
					      <select class="form-control quantity" id="quantity_12" name="quantity[]">
					      	<option value="">Choose Quantity</option>
					        <option value="1 Kg">1 Kg</option>
					        <option value="2 Kg">2 Kg</option>
					        <option value="3 Kg">3 Kg</option>
					        <option value="4 Kg">4 Kg</option>
					        <option value="5 Kg">5 Kg</option>
					      </select>
					  </div>
					</div>
				</div>

				
				<li><div class="form-group" style="text-align: center;">
					<label for="exampleFormControlTextarea1">Other Remarks</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea" value="remarks"></textarea>
				</div></li>
			</ul>
			<div style="text-align: center;">
				<input type="submit" name="submit" style="background-color: #f75f00;">
			</div>
		</form>
	</div>

	</body>
</html>

<script>

	$('select').on('change', function() {
	    var id;
	    var prefix;

	     id = $(this).attr("id");//item_0
		 prefix = id.split('_')[1];
		 $("#item_"+prefix).attr('required', true);
	});


	$(document).ready(function(){

        $("input:checkbox").change(function() {

	  
	    var id;
	    var prefix;
	   

	    $("input:checkbox").each(function() {
	        if ($(this).is(":checked")) {
	             id = $(this).attr("id");//item_0
	             prefix = id.split('_')[1];
	             $("#quantity_"+prefix).attr('required', true);


	        } else {
	           
	        }
	    });
	});
    });
</script>
<?php

if (isset($_POST['submit']))
{
	include('connect.php');
	$rawitems = $_POST['item'];
	$text = $_POST['textarea'];
	$quantity = $_POST['quantity'];
	$items = implode(",",$rawitems);
	$quantities = implode(",",$quantity);

	

		$qry = "INSERT INTO `customer`(`items`, `text`,`quantity`) VALUES ('$items','$text','$quantities')";
		//print_r($qry);die;
	

	
	$run = mysqli_query($conn,$qry);
	
	if( $run == true)
	{
		?>
		<script>
			alert("Your have send list successfully");
				alert("To order more continue");
				window.location.href = "costumer.php";

</script>
		<?php
	}
}


?>
<?php
}//If session exists.or if user logged in then only show this page otherwise redirect to login.php
else
{

	 header("location: login.php");
}
?>