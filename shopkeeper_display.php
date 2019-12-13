<?php
session_start();
if(isset($_SESSION['username']))
{

	include('connect.php');
?>
<?php

include("connect.php");

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

	 <!-- This line adds jquery to the page, otherwise the script tags at the bottom will not run -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Google Translate Element begin -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', includedLanguages: 'en,hi,mr',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

     <style type="text/css">
        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS BEGIN */
        div#google_translate_element div.goog-te-gadget-simple {
            border: none;
            background-color: transparent;
            /*background-color: #17548d;*/ /*#e3e3ff*/
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
            text-decoration: none;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
           color: #000;
	    font-size: 18px;
	    font-weight: 600;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover {
            color: white;
        }
        
        .goog-te-gadget-icon {
            display: none !important;
            /*background: url("url for the icon") 0 0 no-repeat !important;*/
        }

        /* Remove the down arrow */
        /* when dropdown open */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(213, 213, 213);"] {
            display: none;
        }
        /* after clicked/touched */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(118, 118, 118);"] {
            display: none;
        }
        /* on page load (not yet touched or clicked) */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(155, 155, 155);"] {
            display: none;
        }

        /* Remove span with left border line | (next to the arrow) in Chrome & Firefox */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left: 1px solid rgb(187, 187, 187);"] {
            display: none;
        }
        /* Remove span with left border line | (next to the arrow) in Edge & IE11 */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"] {
            display: none;
        }
        /* HIDE the google translate toolbar */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
        body {
            top: 0px !important;
        }

        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
    </style>

</head>

<body>
	<?php
		
		$query = 'SELECT `items`,`text`,`quantity` FROM `customer` ORDER BY `id` DESC';
		$run = mysqli_query($conn,$query);
		$count = mysqli_num_rows($run);
		?>
	<div>
		<nav>
			<section>
				<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#f75f00;">
					<a class="navbar-brand" href="shopkeeper_index.php">VIT SHOP </a>

					 <div id="google_translate_element"></div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#har" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
			 		</button>
					<div class="collapse navbar-collapse" id="har">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="shop_profile.php">Profile</a></li>
							<li class="nav-item active"><a class="nav-link" href="shopkeeper_his.php">History</a></li>
							<li class="nav-item active"><a class="nav-link" href="shopkeeper_noti.php">Notifications(<?php echo $count;?>)</a></li>
							<form action="logout.php" method="POST">
								<button type="submit">Logout</button>
							</form>
						</ul>
					</div>
				</nav>
			</section>
		</nav>
	</div>
	
	<?php
		
		
		if (mysqli_num_rows($run)>0)
		{
			$data = mysqli_fetch_assoc($run);			
            $info = explode(",",$data['items']);
             $quantity = explode(",",$data['quantity']);
			
			?>
			<div class="row">
				<div class="col-md-2">
					<ul class="list-group">
					<?php
					$key = 0;
					foreach($info as $i)
					{
						
						if($i != "")
						{?>
							<li class="list-group-item"><input type="checkbox" name="item[]" id="item_<?php echo $key;?>" value="<?php echo $i;?>"><?php echo $i;?></li>
							<?php
							echo "<br>";
						}
						$key++;
					}
					?>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="list-group">
					<?php
					foreach($quantity as $i)
						{
							if($i != "")
							{?>
								<li class="list-group-item"><?php echo $i;?></li>
								
							<?php
							echo "<br>";
							}
							
						}
					?>
				</ul>
				</div>
			</div>
			
			<?php
			echo "<br>";
			echo "<h5> Suggestions </h5>";
			echo $data['text'];
		}
			?>
	<div>
		<form method="post" action="">
			<ul class="list-group">
				<li><div class="form-group" style="text-align: center;">
					<label for="exampleFormControlTextarea1">Feedback</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="textarea" value="remarks" readonly=""></textarea>
				</div></li>
			</ul>
			<div style="text-align: center;">
				<input type="submit" name="submit" style="background-color: #f75f00;">
			</div>
		</form>
	</div>
	<?php
	if (isset($_POST['submit']))
{
	include('connect.php');
	$text = $_POST['textarea'];	
	$qry = "INSERT INTO `shopkeeper`(`feedback`) VALUES ('$text')";
	$run = mysqli_query($conn,$qry);
	if( $run == true)
	{
		?>
		<script>alert("Your have send list successfully");window.location.href = "shopkeeper_display.php";</script>
		<?php
	}
		
	}
		?>
</body>
</html>
<?php
}//If session exists.or if user logged in then only show this page otherwise redirect to login.php
else
{

	 header("location: login.php");
}
?>

  <script>
        $('document').ready(function () {
            $('#google_translate_element').on("click", function () {

                // Change font family and color
                $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div") //, .goog-te-menu2 *
                .css({
                    'color': '#544F4B',
                    'background-color': '#e3e3ff',
                    'font-family': '"Open Sans",Helvetica,Arial,sans-serif'
                });

                // Change hover effects  #e3e3ff = white
                $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
                    $(this).css('background-color', '#17548d').find('span.text').css('color', '#e3e3ff');
                }, function () {
                    $(this).css('background-color', '#e3e3ff').find('span.text').css('color', '#544F4B');
                });

                // Change Google's default blue border
                $("iframe").contents().find('.goog-te-menu2').css('border', '1px solid #17548d');

                $("iframe").contents().find('.goog-te-menu2').css('background-color', '#e3e3ff');

                // Change the iframe's box shadow
                $(".goog-te-menu-frame").css({
                    '-moz-box-shadow': '0 3px 8px 2px #666666',
                    '-webkit-box-shadow': '0 3px 8px 2px #666',
                    'box-shadow': '0 3px 8px 2px #666'
                });
            });
        });
    </script>
    <script type="text/javascript">
    	   $("input:checkbox").change(function() {
        
            var favorite = [];
            $.each($("input[name='item[]']:checked"), function(){            
                favorite.push($(this).val());
            });
           // alert("My favourite sports are: " + favorite.join(", "));
            $("textarea#exampleFormControlTextarea1").val(favorite.join(", "));

        
    });
    </script>