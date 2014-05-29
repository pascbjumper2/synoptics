///////////////Show/hide sidebar

	var toggled = "showing";
		$( ".toggleSidebar" ).click(function() {	  
			if(toggled == "showing"){
				var col1width = $( "#sidebar" ).width() + 30;
				$( "#sidebar" ).fadeOut(750).css('position', 'absolute').css('width', (col1width));			
				$( "#loadedFeatureArea" ).switchClass( "col-sm-9", "col-sm-12", 750, "easeInOutExpo" );			
				toggled = "hidden";
			}
		else {
			$( "#sidebar" ).delay( 650 ).fadeIn(750).css('width', '').css('position', 'inherit'); //.delay(700)/750
			$( "#loadedFeatureArea" ).switchClass( "col-sm-12", "col-sm-9", 750, "easeInOutExpo");		
			toggled = "showing";
		}
	});
	
	
	
	
///////////////Click/drag list items w/ JQueryUI
	$(function() {
	    $( "#columns" ).sortable({
	      placeholder: "activated"
	    });
	    $( "#columns" ).disableSelection();
	  });

/////////////////// SELECTION SCRIPT + LOAD PANEL 2 CONTENT /////////////////////

	var selected_feature_id = 1;
	var last_selected_feature_id = 1;

	function select(name)
	{		
		
		//////// Highlight Selected Feature /////////
		
		if(selected_feature_id==last_selected_feature_id) {} else
		{			
			if(name.id=="feature_"+(selected_feature_id)) { name.className='list-group-item activated'};
			
			var removeOld = document.getElementById("feature_"+(last_selected_feature_id));
			removeOld.className = 'list-group-item';
			last_selected_feature_id = (selected_feature_id);	
			
			
			//////// Load Panel 2 Header /////////
			document.getElementById("panel2header").innerHTML = "Chart of Accounts";  


			//////// Load Panel 2 /////////
			$( "#panelContent" ).load((selected_feature_id)+".html", function( response, status, xhr ) {
				if ( status == "error" ) {
					var msg = "Well drat, we got this error: ";
					$( "#panelContent" ).html( "<h2>" + msg + xhr.status + " " + xhr.statusText + "</h2>" );
				}
			});

			
			
			

		}
						
	}
	
	
	
	
	
	
	/////
	//app/views/home/coa.html
	function loadCOA(){
			
			//$("#panelContent").load("1.html"); //This works
			//$("#panelContent").load("../app/views/home/coa.html"); //This does not, because you can't load items outside of /public once the page loads
			
			$( "#panelContent" ).load("/accounts/accounts", function( response, status, xhr ) {
				if ( status == "error" ) {
					var msg = "Well drat, we got this error: ";
					$( "#panelContent" ).html( "<h2>" + msg + xhr.status + " " + xhr.statusText + "</h2>" );
				}
			});
			
			/*
			$( "#panelContent" ).load(("../../home/coa.html", function( response, status, xhr ) {
				if ( status == "error" ) {
					var msg = "Well drat, we got this error: ";
					$( "#panelContent" ).html( "<h2>" + msg + xhr.status + " " + xhr.statusText + "</h2>" );
				}
			});
			*/


	}
