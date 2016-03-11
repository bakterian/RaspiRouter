<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="routerBg" content="width=device-width, initial-scale=1.0">
    <meta name="routerSite" content="">
    <meta name="marcin" content="">

    <title>Raspi Router Configuration</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

	<!-- media control icons -->
	<link rel="stylesheet" href="css/mediaControlStyle.css">
	<link rel="stylesheet" href="css/icono.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script>
		$(document).ready(function()
		{
				$.ajax({
				type: "POST",
				url: "/ajax/proccessPostRequests.php",
				data: {getPlaylistNames: "AllPaths"},
				success: function(data) 
				{
					handlePlayslistIds(data);
				}
			 });
		});
		</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>RASPI ROUTER</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#about">Clients</a></li>
		<li><a href="#service">SmsInbox</a></li>
		<li><a href="#actionButtons">Router Actions</a></li>
		<li><a href="#status">Status</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="umtskeeper.stat.html">DataUsage</a></li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h2>WELCOME TO <span class="text_color">RASPI ROUTER</span> </h2>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: clients -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Connected Clients</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
		<?php
		$output0 = shell_exec('cat /home/pi/ROUTER/2_OTHER/2_DhcpScript/phpDhcpClients');
		echo "$output0";
		?>
        </div>		
		</div>
	</section>
	<!-- /Section: clients -->
	

	<!-- Section: Action buttons -->
    <section id="actionButtons" class="home-section text-center bg-gray">	
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Router Actions</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
			<div id="musicImageID" class="PlaybackImage">
				<div class="MusicBackgorund">
					<div id="VolumeInfo"></div>
					<div id="TrackInfo"></div>
				</div>
			</div>
			<div class="mediaControls" id="MediaControlsId">
				<input type="radio" name="iconShuffle" id="asterisk"><!--
			 --><label class="demo new" id="shuffleLabel">
					<i class="icono-asterisk"></i>
					<div class="about"><button type="submit" name="ToggleShuffle" onClick="musicControlClicked(this.name)" class="btnActions">Shuffle</button></div>
				</label><!--
			 --><input type="radio" name="iconRadio" id="reset"><!--
			 --><label class="demo new" id="repeatLabel">
					<i class="icono-reset"></i>
					<div class="about"><button type="submit" name="ToggleRepeat" onClick="musicControlClicked(this.name)" class="btnActions">Repeat</button></div>
				</label><!--
			--><input type="radio" name="icons" id="volumeDecrease"><!--
			--><label class="demo new">
					<i class="icono-volumeDecrease"></i>
					<div class="about"><button type="submit" name="VolumeDown" onClick="musicControlClicked(this.name)" class="btnActions">Volume Down</button></div>
				</label><!--
			--><input type="radio" name="icons" id="volumeIncrease"><!--
			--><label class="demo new">
					<i class="icono-volumeIncrease"></i>
					<div class="about"><button type="submit" name="VolumeUp" onClick="musicControlClicked(this.name)" class="btnActions">Volume Up</button></div>
				</label><br />
				<input type="radio" name="icons" id="previous"><!--
			 --><label class="demo new">
					<i class="icono-previous"></i>
					<div class="about"><span >icono-previous</span></div>
				</label><!--
			 --><input type="radio" name="icons" id="rewind"><!--
			 --><label class="demo new">
					<i class="icono-rewind"></i>
					<div class="about"><button type="submit" name="FastBackward" onClick="musicControlClicked(this.name)" class="btnActions">Fast Backward</button></div>
				</label><!--
			 --><input type="radio" name="icons" id="play"><!--
			 --><label class="demo new">
					<i class="icono-play"></i>
					<div class="about"><button type="submit" name="Start" onClick="musicControlClicked(this.name)" class="btnActions">Start</button></div>
				</label><!--                
			 --><input type="radio" name="icons" id="pause"><!--
			 --><label class="demo new" id="pauseLabel">
					<i class="icono-pause"></i>
					<div class="about"><button type="submit" name="TogglePause" onClick="musicControlClicked(this.name)" class="btnActions">Pause</button></div>
				</label><!--
			 --><input type="radio" name="icons" id="stop"><!--
			 --><label class="demo new">
					<i class="icono-stop" onclick="musicControlClicked('StopPlayback')"></i>
					<div class="about"><button type="submit" name="StopPlayback" onClick="musicControlClicked(this.name)" class="btnActions">Stop</button></div>
				</label><!--
			 --><input type="radio" name="icons" id="forward"><!--
			 --><label class="demo new">
					<i class="icono-forward"></i>
					<div class="about"><button type="submit" name="FastForward" onClick="musicControlClicked(this.name)" class="btnActions">Fast Forward</button></div>
				</label><!--
			 --><input type="radio" name="icons" id="next"><!--
			 --><label class="demo new">
					<i class="icono-next"></i>
					<div class="about"><button type="submit" name="NextSong" onClick="musicControlClicked(this.name)" class="btnActions">Next Song</button></div>
				</label><br /><br />
			</div>
		</div>
	</section>
	<!-- /Section: Action buttons -->
	
	<!-- Section: sms inbox -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Usb-Modem SMS Inbox</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		<?php
		$output = shell_exec('tail -n +1 /var/spool/gammu/inbox/*');
		echo "<pre>$output</pre>";
		?>
        </div>		
	</section>
	<!-- /Section: sms inbox -->
	
		<!-- Section: status -->
    <section id="status" class="home-section text-center bg-gray">	
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Router Status</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		<?php
		$output2 = shell_exec('head -n 12 /home/pi/ROUTER/0_USB_MODEM/2_umtsKeeper/umtskeeper.stat');
		echo "<pre>$output2</pre>";
		?>
        </div>		
	</section>
	<!-- /Section: status -->

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Send to admin</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Router location</h5>
				
				<address>
				  <strong>Kronach Deutschland.</strong><br>
				  Nalser Str. 12<br>
				  Gundelsdorf 96317<br>
				  <abbr title="Phone">P:</abbr> (48) 660-728-839
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">marcinkarczewski86@gmail.com</a>
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

	<script>
		/* --------------------- AJAX POST Requests to Server ------------------------------------- */
		(function worker() {
			  $.ajax({
				type: "POST",
				url: "/ajax/proccessPostRequests.php",
				data: {getVarStatusEvent: 'RawStatus'},
				success: function(data) 
				{
					handleRawStatus(data);
				},
				complete: function() {/*schedule the next request*/ setTimeout(worker,1000);}
			 });
		})();
		function playlistClicked(clicked_name)
		{
			$.post("/ajax/proccessPostRequests.php",{ "playlistEvent": clicked_name });
		}
		
		function musicControlClicked(clicked_name)
		{
			$.post("/ajax/proccessPostRequests.php",{ "musicControlEvent": clicked_name });
		}
		/* ---------------------------------------------------------------------------------------- */
		/* ---------------------- Java Script handling post responses form server ----------------- */
		function handleRawStatus(rawStatus)
		{
			var dataArray = rawStatus.split(";");
			processGetValueResponse(dataArray[0],'repeatLabel');
			processGetValueResponse(dataArray[1],'shuffleLabel');
			var pauseStatus = (dataArray[2] == 'PAUSED') ? 1 : 0;
			processGetValueResponse(pauseStatus,'pauseLabel');
			managePlaybackImage(dataArray[2]);
			document.getElementById('VolumeInfo').innerHTML = dataArray[3];
			
			var splitTrackPath = dataArray[4].split("/");
			var lastIndex= splitTrackPath.length - 1;
			document.getElementById('TrackInfo').innerHTML = splitTrackPath[lastIndex];
		}
		
		function processGetValueResponse(response,valueId)
		{
			if(response == 1)
			{
				setFocusOnLabel(valueId);
			}
			else if(response == 0)
			{
				clearFocusOnLabel(valueId);
			}
		}
		
		function handlePlayslistIds(sPlaylistIds)
		{
			console.log(sPlaylistIds);
			//document.getElementById("MediaControlsId").innerHTML += "blabla";
			var saPlaylistIds = sPlaylistIds.split(";");
			var lastIndex= saPlaylistIds.length - 1;
			
			for(var i=0; i < (saPlaylistIds.length - 1); ++i)
			{
				generatePlaylistButton(saPlaylistIds[i]);
			}
		}
		/* ---------------------------------------------------------------------------------------- */
		/* ---------------------- Java Script html elements handling ------------------------------ */
		function managePlaybackImage(playerStatus)
		{
			var headingElement = document.getElementById('musicImageID');
			if(playerStatus === "INACTIVE")
			{
				if(!hasClass(headingElement, 'PlaybackImage'))
				{
					headingElement.classList.add('PlaybackImage');
				}
			}
			else
			{
				if(hasClass(headingElement,'PlaybackImage'))
				{
					headingElement.classList.remove('PlaybackImage');
				}
			}
		}

		function setFocusOnLabel(labelId)
		{
			var iconToFocus = document.getElementById(labelId);
			if(iconToFocus.previousElementSibling.checked===false){
			iconToFocus.previousElementSibling.focus();
			iconToFocus.previousElementSibling.checked=true;
			iconToFocus.previousElementSibling.focus();
			}
		}

		function clearFocusOnLabel(labeldId)
		{
			//var iconToFocus = document.getElementById('shuffleLabel');
			var iconToFocus = document.getElementById(labeldId);
			iconToFocus.previousElementSibling.focus();
			iconToFocus.previousElementSibling.checked=false;
		}

		function hasClass(elem,classId)
		{
			return ('' + elem.className + '').indexOf('' + classId + '') >-1;
		}
		

		function generatePlaylistButton(sPlaylistId)
		{
			var sMediaControlsDiv = document.getElementById("MediaControlsId");
			var sButtonHTML = "<input type=\"radio\" name=\"icons\" id=\"music\"><label class=\"demo new\"><i class=\"icono-music\"></i><div class=\"about\"><button type=\"submit\" name=\"";
			sButtonHTML += sPlaylistId  + "\" onClick=\"playlistClicked(this.name)\" class=\"btnActions\"></button></div><div class=\"PlaylistId\">Play "  + sPlaylistId  + "</div></label>";
			sMediaControlsDiv.innerHTML += sButtonHTML;
		}
		/* ---------------------------------------------------------------------------------------- */
	</script>
</body>

</html>
