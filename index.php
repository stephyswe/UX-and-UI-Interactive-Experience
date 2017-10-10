<!DOCTYPE html>
<html lang="en">
  <head>
  
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
	
    <title>UX & UI Interactive Experience</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="assets/colorbox-assets/colorbox.css" /> 	<!-- COLORBOX -->
	

    
	

</head>

<body>

	<!-- Part 1: Wrap all page content here -->
    
<video poster="https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2015/07/uxdesign-1200x600.jpg" id="bgvid" playsinline autoplay>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source src="http://stephaniie.com/project/__video/sd.mp4" type="video/mp4">
</video>
	

	
	<!--
	<div w3-include-html="assets/parts/navbar.html"></div> 
	-->
		
	<?php include("assets/parts/content-uimap2.php"); ?>
	
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

<script src="assets/colorbox-assets/jquery.colorbox.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/jquery.zoomable-1.2.js"></script>	
<script type="text/javascript" src="assets/js/hammer.min.js"></script>


	
		  
  </body>
  

</html>
