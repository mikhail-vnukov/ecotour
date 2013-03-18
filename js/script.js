jQuery(document).ready(function($) {
	$('.counter').counter({
		direction: 'down',
		format: "30:23:59:59",
		interval: 1000
	});

	$('.comment').each(function() {
		var additional = $(this).children('.additional-comment');

		$(this).children(".summary-comment").click(function(){
			var shown = additional.is(":visible");
			$('.additional-comment').slideUp('slow');
			if (!shown) {
				additional.slideDown('slow');	
			} 
		});
	});

	$("submit").click(function(evt) {
		$(this).children("input").blue();
		evt.preventDefault();
	});
});

function checkEmail(that) {
	var str = that.val();

	var status = $(that).siblings(".help-inline");
	var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
	var controlGroup = $(that).parents(".control-group");
	if(isEmpty(str)) {
		controlGroup.addClass("error");
		status.html("Поле обязательно для заполнения");
		status.show();
	} else if (!re.test(str)) {
		controlGroup.addClass("error");
		status.html("Адрес неверный");
		status.show();

	} else {
		controlGroup.removeClass("error");
		controlGroup.addClass("success");
		status.hide();
	}
}


function check(that) {
	var str = that.val();

	var status = $(that).siblings(".help-inline");
	var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
	var controlGroup = $(that).parents(".control-group");
	if(isEmpty(str)) {
		controlGroup.addClass("error");
		status.html("Поле обязательно для заполнения");
		status.show();
	} else {
		controlGroup.removeClass("error");
		controlGroup.addClass("success");
		status.hide();
	}
}

function isEmpty(str){
	return (str == null) || (str.length == 0);
}