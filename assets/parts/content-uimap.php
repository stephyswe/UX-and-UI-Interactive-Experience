		<div id="con">
			<div class="row">
			<h1>UX & UI Map</h1><img class="map-text mute-video" src=""></img>
			
				<div class="col-md-12"> <input type="button" value="Press Here to Position UX & UI Map correctly. " onclick="$('#image').zoomable({method:'startZoomOut'});this.disabled='disabled';" class="p-button2"/>
					<table class="center">			
						<thead>
							<tr>
								<th>
								</th>
							</tr>
							<tr>
								<th><button class="p-button map-text " id="stopvid">Pause Video</button>
								</th>
								<th><button style="vertical-align:middle" class="mute-video"></button>
								</th>
							</tr>
							<tr>
								<th><button class="button" style="vertical-align:middle" type="button" onclick="$('#image').zoomable({method:'zoomIn'})"> <span>Zoom in </span></button></th>
								<th><button class="button" style="vertical-align:middle" type="button" onclick="$('#image').zoomable({method:'zoomOut'})"> <span>Zoom Out </span></button></th>
							</tr>
						</thead>
					</table>
					<br><br>
				</div>
			</div class="row">
				<div class="col-md-12 col-xs-12" style="float:right;background-color:white;border:1px solid black;;overflow:hidden;height:550px;position:relative;">
					
					<img src="assets/images/imagemap2-eng.png" usemap="#map" id="image" alt="Demo image for zoomable jQuery plugin" />
					
					<?php include("map.php"); ?>
        
			</div>
		</div> <!-- row -->
    </div> <!-- container -->

