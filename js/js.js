$(document).ready(function(){
	$("#logoBack").height($("#logo img").height());
	var open = false;
	var last;

	function expandDiv(element){
		if(open){
			$("#leftDiv").stop().animate({right: '0%', top: '32%', height: '65%', width: '0%', opacity: '0.0'}, 1500);

		}
		else{
						$(element).toggleClass("hovered")

			$("#leftDiv").stop().animate({right: '88%', top: '32%', height: '65%', width: '75%', opacity: '1.0'}, 1500);
		}
	}

	function checkButton(last, element){


		$("#aboutus").prop("disabled",false);
		$("#contactus").prop("disabled",false);
		$("#home").prop("disabled",false);
		$("#menu").prop("disabled",false);
		$("#gallery").prop("disabled",false);


		$(element).prop("disabled",true);

		if(open){
			$( ".nav" ).each(function() {
				if(this == last){
					$(this).toggleClass("hovered")
				}
				if(this == element){
					$(this).toggleClass("hovered")
				}
			});
		}

	}

	function checkContent(div){
			$("#leftContent1, #leftContent2, #leftContent3, #leftContent4").fadeOut(300).promise().done(function(){
				$(div).fadeIn(300);
			});
		}

	$(document).on('click','#home',function () {
		console.log(open)

		if(open){
			open = false;
			$("#leftDiv").stop().animate({right: '0%', top: '32%', height: '65%', width: '0%', opacity: '0.0'}, 1500);
					checkButton(last,this);

			$( ".nav" ).each(function() {
				if(this == last){
					$(this).toggleClass("hovered")
				}
				if(this == "#home"){
					$(this).toggleClass("hovered")
				}
			});
		}
	});

	$( window ).resize(function() {
		console.log("hi");
		$("#logoBack").height($("#logo img").height());
		
	});

	$(document).on('click','#aboutus',function () {
		console.log(open);
		if(!open){
			expandDiv(this);
		}
		checkButton(last,this);
		checkContent("#leftContent1");
		last = this;
		open = true;
		
	});

	$(document).on('click','#menu',function () {
		console.log(open);
		if(!open){
			expandDiv(this);
		}
		checkButton(last,this);
		checkContent("#leftContent2");
		last = this;
		open = true;
		
	});

	$(document).on('click','#contactus',function () {
		console.log(open);
		if(!open){
			expandDiv(this);
		}
		checkButton(last,this);
		checkContent("#leftContent3");
		last = this;
		open = true;
		
	});

	$(document).on('click','#gallery',function () {
		console.log(open);
		if(!open){
			expandDiv(this);
		}
		checkButton(last,this);
		checkContent("#leftContent4");
		last = this;
		open = true;
		
	});
});