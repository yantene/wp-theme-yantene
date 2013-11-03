jQuery(function(){
	jQuery("pre").addClass("prettyprint");
});

jQuery(function(){
	jQuery("a[href^='http']:not([href*='" + location.hostname + "'])").attr('target', '_blank');
});

function getYear(){
	var date = new Date();
	document.write(date.getFullYear());
}

function getGrade(){
	var date = new Date();
	date.setMonth(date.getMonth() - 4);
	document.write(date.getFullYear() - 2011);
}
