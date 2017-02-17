$(document).ready(function(){

	$('.luqui-section').hide();
	$('.mao-section').hide();
	$('.places-section').hide();

	$('.principal-title').on('click', function(){	
		$('.luqui-section').hide();
		$('.mao-section').hide();
		$('.places-section').hide();
		$('.pictures-box').show();
	});

	$('.cat1').on('click', function(){
		$('.luqui-section').show();
		$('.mao-section').hide();
		$('.pictures-box').hide();
		$('.places-section').hide();
	});

	$('.cat2').on('click', function(){
		$('.mao-section').show();
		$('.pictures-box').hide();
		$('.luqui-section').hide();
		$('.places-section').hide();
	});

	$('.places').on('click', function(){
		$('.mao-section').hide();
		$('.pictures-box').hide();
		$('.luqui-section').hide();
		$('.places-section').show();
	})


});


