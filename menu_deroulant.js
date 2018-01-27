/*jQuery time*/
function showContent(){
	$("#menu_accordeon").show();
	$()
}

function hideContent(){
	$("#menu_accordeon").hide();
}

function toggleContent(){
	$("#menu_accordeon").toggle();
}

$(document).ready(function(){
	var open = false;
	//on cache
	$("#menu_accordeon").hide();
	$("#cours").mouseover(function(){
		if(open == false){
			$("#menu_accordeon").fadeIn("slow");
			open = true;
		}
		else {
			$("#menu_accordeon").fadeOut("slow");
			open = false;
		}
	});
		$("#menu_accordeon h3").mouseover(function(){
			$("#menu_accordeon ul ul").slideUp();
				if(!$(this).next().is(":visible"))
				{
					$(this).next().slideDown();
				}
		});	
});

