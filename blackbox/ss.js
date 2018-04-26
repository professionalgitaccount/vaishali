$(document).ready(function(){
	
	$(".blackbox").hide();

	$(".pro_img").mouseenter(function(){
		$(this).children(".blackbox").fadeIn(1000);

	})

	$(".pro_img").mouseleave(function(){
		$(this).children(".blackbox").fadeOut(1000);
	})
	
	


	// slider examples
	slide_wi = $(".slider").width();
	// alert(slide_wi);
	slide_hi = Math.round($(".slider").height());
	// alert(slide_hi);

	$(".slider").css("float","left");
	$(".mainslide").width(slide_wi * $(".slider").length);
	$(".mainslide, .gallery").height(slide_hi);
	$(".gallery").width(slide_wi);
	// $(".gallery").css("border","3px solid");
	$(".gallery").css("overflow","hidden");
	// $(".mainslide").css("border","3px solid red")

	slider_arr = [];
	$(".slider").each(function(position){
		// console.log(position);
		// console.log($(this).width())
		// console.log($(this).width() *position)

		slider_arr[position] = $(this).width() * position;

	})
	// console.log(slider_arr)
	$(".circles span").click(function(){
		var pos = $(this).index();
		// console.log(pos)
		// console.log(slider_arr[pos])
		$(".mainslide").animate({
			"margin-left": -slider_arr[pos]+"px"
		},1000);
		$(".circles span").css("background","#f1f1f1")
		$(this).css("background","#c1c1c1")

	})
	
	// slider examples


})