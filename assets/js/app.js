// /**
//  * Created by Haleem on 05-Sep-16.
//  */

 function SlideShow(interval, imageUrls, selector) {
 	this.interval = parseInt(interval) || undefined;
 	this.imageUrls = imageUrls || [];
 	this.selector = selector || undefined;

 	this.isOvered = false;

 	this.index = 0; // index of the current imageUrl array

 	window.slideShowRef = this;

 	this.constructor = this;

 	this.prototype = Object;
    
 	this.start  = function () {

 		if (!this.utility())  // If the utilities returned false... Negates it to true and return;
 			return;

 		this.imageUrlsLength = this.imageUrls.length;

 		this.slide();

 		this.leftButton();

 	}

 	this.slide = function() {

 		setInterval(function() {

 			var SlideShow = arguments[0][0];

 			

 			// if the current index is equals to the length, we have gotten to the end of the array

 			if ( SlideShow.isLastIndex(SlideShow.index, SlideShow.imageUrlsLength) )
 				SlideShow.index = 0;


 			var currentImageUrl = SlideShow.imageUrls[SlideShow.index];

 			SlideShow.index++;

 			if (SlideShow.isOvered) {
 				SlideShow.onMouseOut();
 				return ;
 			}

 			SlideShow.setBackgroundUrl(SlideShow.selector, currentImageUrl);

 		}, this.interval, [this]);
 	}

 	this.isLastIndex = function(mainArrLength, currentIndex) {

 		if (mainArrLength === currentIndex) {
 			return true;
 		}

 		return false;

 	}

 	this.setBackgroundUrl = function (selector, url) {

 		if($ === undefined )
 			return false;

 		var selector = $(selector);

 		var url = 'url(' + url + ')';

 		selector.css('background-image', url);
 		selector.css('background-color', '');

 		return true;
 	}

 	this.utility = function () {
 		if(typeof this.interval !== 'number') {
 		 	console.error('interval argument of slideshow needs a string integer');
 		 	return false;

 		}
 		if(typeof this.selector !== 'string') {
 			console.error('selector argument of slideshow needs a string integer');
 			return false;
 		}

 		if(typeof this.imageUrls !== 'object') {
 			console.error('imageUrls argument of slideshow needs a string integer');
 			return false;
 		}

 		return true;
 	}

 	this.scroll = function (scrollType) {

 		if ( this.isLastIndex(this.index, this.imageUrlsLength) )
 				this.index = 0;

 		if (scrollType === 'backwards')
 			this.index === 0 ? this.index = this.imageUrlsLength-1 : this.index--;

 		if (scrollType === 'forwards');
 			this.index === 0 ? this.index = 0 : this.index++;

 		this.setBackgroundUrl(this.selector, this.imageUrls[this.index]);

 	}

 	this.onMouseOut = function () {

 	}

 	this.leftButton = function(index, array) {

 		$(this.selector + '>.left').on('click', function (evt) {
	 		slideShowRef.scroll('backwards');
 		});


 	}


 }

 $(function() {
 	$('.slider').hide();
 	$('.slider').css('background-image', 'url(/./assets/img/Ilorin-20140610-00095.jpg)');
; })

setTimeout(function() {

	$('div.welcome-message-container').hide();
 	$('.slider').show();

	slideShow = new SlideShow('3100', 
		[
			'/./assets/img/Ilorin-20140610-00094.jpg', 
			'/./assets/img/Ilorin-20140610-00095.jpg'
		], 
		'.slider'
	);
    slideShow.start();
}, 5000);

$().ready( function() {
    $('div.welcome').fadeIn();
});

$(function () {
	setTimeout(function () {
		$(".welcome-message").on('click', function (event) {
			console.log(event);
			event.stopPropagation();
		});
	}, 4000);

})
