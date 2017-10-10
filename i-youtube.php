<!DOCTYPE html>
<html lang="en">
  <head>
  
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
    <title>UX & UI Interactive Experience</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/tv-style.css" />
	<link rel="stylesheet" type="text/css" href="assets/colorbox-assets/colorbox.css" /> 	<!-- COLORBOX -->
	
	

    
	

</head>

<body>

	<!-- Part 1: Wrap all page content here -->
    
<div class="cover">
  <div class="hi">This is fully responsive & mobile friendly YouTube video background scaled with 16/9 aspect ratio. Actually bunch of videos - js loads randomly 1 of 4 with different start/end times, then it loops through all the vids.<br><br> Click <span>here</span> to <em>un</em>mute & <span>here</span> to see another vid (<em>0</em> of <em>0</em>). Check all of them! They're quite awesome. ;]</div>
</div>
	<div class="tv">
		  <div class="screen mute" id="tv"></div>
	</div>


	

	
	<!--
	<div w3-include-html="assets/parts/navbar.html"></div> 
	-->
		
	<?php include("assets/parts/content-uimap-youtube.php"); ?>
	
		<script src="https://code.jquery.com/jquery-1.7.0.min.js" integrity="sha256-/05Jde9AMAT4/o5ZAI23rUf1SxDYTHLrkOco0eyRV84=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	


	
	
	<script src="https://www.w3schools.com/lib/w3data.js"></script>	
	
	<script>
		w3IncludeHTML();
		

var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#stopvid");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause Video";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Click to Unpause";
  }
})

$("video").prop('muted', false);

$(".mute-video").click(function () {
    if ($("video").prop('muted')) {
        $("video").prop('muted', false);
        $(this).addClass('unmute-video');

    } else {
        $("video").prop('muted', true);
        $(this).removeClass('unmute-video');
    }
    console.log($("video").prop('muted'))
});


</script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>
<script src="https://www.youtube.com/iframe_api"></script>
<script src="assets/colorbox-assets/jquery.colorbox.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/script-yt.js"></script>
<script type="text/javascript" src="assets/js/jquery.zoomable-1.2.js"></script>	
<script type="text/javascript" src="assets/tv-script.js"></script>

      <script src="jquery.fitvids.js"></script>
      <script>
        // Basic FitVids Test
        $(".ajax").fitVids();
        // Custom selector and No-Double-Wrapping Prevention Test
        $(".ajax").fitVids({ customSelector: "iframe[src^='http://socialcam.com']"});
      </script>

	
		  
  </body>
  

</html>
