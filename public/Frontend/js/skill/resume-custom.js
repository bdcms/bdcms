
/*********************/
/*
/*  Background Video 
/*	
/*********************/


var ScrolleFullImage = function(){
	var winHeight = $(window).height();
	$("#home").css({height:winHeight});  
}



/*********************/
/*
/*		Pie Initialize
/*
/*********************/

jQuery(document).ready(function(){

ScrolleFullImage();
	jQuery('#chart-show').bind('inview', function (event, visible) {
	var c=jQuery(this).css('color');
	
	if(jQuery('.pie').length)
	{
	 
		jQuery('.pie').easyPieChart({
			barColor:c,
			trackColor: '#161616',
			scaleColor: false,
			lineWidth:15,
			animate: 5000,
			onStep: function(value) {
				this.$el.find('span').text(~~value+1);
			}
		});
	}
    });
	
	
});	



 
	


