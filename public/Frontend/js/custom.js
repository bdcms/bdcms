//Start Menu JS Function Jikjak Theme
	// Superfish Menu Hover Effect
	jQuery(function(){
		jQuery('ul.sf-menu').superfish({
			hoverClass:    'sfHover',         
		    pathClass:     'overideThisToUse',
		    pathLevels:    1,    
		    delay:         200, 
		    animation:     {opacity:'show', height:'show'}, 
		    speed:         'normal',   
		    autoArrows:    false, 
		    dropShadows:   true, 
		    disableHI:     false, 
		    easing:        "easeOutQuad",
		    onInit:        function(){},
		    onBeforeShow:  function(){},
		    onShow:        function(){},
		    onHide:        function(){}
		});
	});

    // Mean Menu
	jQuery(document).ready(function () {
		jQuery('.navigation nav').meanmenu();
	});
//End Menu JS Function Jikjak Theme