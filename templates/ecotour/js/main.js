(function($){
	window.onload = function() {
		var summary = 0;
		$("nav > ul > li").each(function() {
			summary+=$(this).width();
		});
		$("nav").width(summary);
		$("nav").addClass("shadow");
	};
})(window.jQuery);
