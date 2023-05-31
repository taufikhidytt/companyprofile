// saat mengklik link di navbar
$('.page-scroll').on('click', function (e) {

	// mengambil isi href
	var tujuan = $(this).attr('href');
	// tangkap isi
	var elemenTujuan = $(tujuan);

	//pindahkan scroll
	$('html , body').animate({
		scrollTop: elemenTujuan.offset().top - 50
	}, 1000, 'easeOutBounce');


	e.preventDefault();

});


// parallax
// about
$(window).on('load', function () {
	$('.hKiri').addClass('hMuncul');

	$('.hKanan').addClass('hMuncul');

});



$(window).scroll(function () {
	var wScroll = $(this).scrollTop();

	// jumbotron
	$('.jumbotron img').css({
		'transform': 'translate(0px, ' + wScroll / 4 + '%)'
	});


	$('.jumbotron h1').css({
		'transform': 'translate(0px, ' + wScroll / 2 + '%)'
	});

	$('.jumbotron h2').css({
		'transform': 'translate(0px, ' + wScroll / 1 + '%)'
	});


	// gallery
	if (wScroll > $('.gallery').offset().top - 150) {
		$('.gallery .thumbnail').each(function (i) {
			setTimeout(function () {
				$('.gallery .thumbnail').eq(i).addClass('muncul');
			}, 600 * (i + 1));

		});


	}




});