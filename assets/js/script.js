	$(document).ready(function(){
		//Examples of how to assign the Colorbox event to elements
		$(".group1").colorbox({rel:'group1'});
		$(".group2").colorbox({rel:'group2', transition:"fade"});
		$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
		$(".group4").colorbox({rel:'group4', slideshow:true});
		$(".ajax").colorbox();
		$(".youtube").colorbox({iframe:true, width:"67%", height:"79%"});
		$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
		$(".iframe").colorbox({iframe:true, width:"90%", height:"80%"});
		$(".iframe2").colorbox({iframe:true, width:"85%", height:"80%"});
		$(".inline").colorbox({inline:true, width:"50%"});
		$(".callbacks").colorbox({
			onOpen:function(){ alert('onOpen: colorbox is about to open'); },
			onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
			onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
			onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
			onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
		});

		$('.non-retina').colorbox({rel:'group5', transition:'none'})
		$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
			
		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
	});
	
	$(document).ready(function() {
		$('#image').zoomable({top:-2865, left:-2878});
   });
   
   $('.map-text').on('click', function() {
    $("#con").toggleClass('clicked');
});

	$(document).ready(function() {
			// Tooltip only Text
			$('.masterTooltip').hover(function(){
					// Hover over code
					var title = $(this).attr('title');
					$(this).data('tipText', title).removeAttr('title');
					$('<p class="tooltip"></p>')
					.text(title)
					.appendTo('body')
					.fadeIn('slow');
			}, function() {
					// Hover out code
					$(this).attr('title', $(this).data('tipText'));
					$('.tooltip').remove();
			}).mousemove(function(e) {
					var mousex = e.pageX -50; //Get X coordinates
					var mousey = e.pageY +25; //Get Y coordinates
					$('.tooltip')
					.css({ top: mousey, left: mousex })
			});	
	});
	
	
   

   
   		
