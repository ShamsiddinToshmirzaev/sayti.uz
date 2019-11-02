$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  	loop: true,
  	autoplay: true,
  	autoplayTimeout: 3000,
  	autoplayHoverPause: true,
  	smartSpeed: 2000,
  	lazyLoad : true, //Delays loading of images. Images outside of viewport wont be loaded before user scrolls to them. Great for mobile devices to speed up page loadings.
  	nav: true,
  	navText : ['<i class="fas fa-chevron-left" aria-hidden="true"></i>','<i class="fas fa-chevron-right" aria-hidden="true"></i>'],
  	dots: false,
  	items:3,
  	responsiveClass: true,
  	// when screen is resized the owl carousel will be responsive
  	responsive:{   
  		0:{
  			items:1,
   		}
  	}
  })
});


// google map options

   function initMap(){
    var options ={
      zoom: 16,
      center:{lat:41.337430,lng: 69.328254},
      mapTypeId: google.maps.MapTypeId.HYBRID
    
    }
    var map = new google.maps.Map(document.getElementById("googleMap"),options);    
    var marker = new google.maps.Marker({
      position:{lat:41.337430,lng: 69.328254},
      animation: google.maps.Animation.BOUNCE,
      map:map,
      title:'Sayti.uz',
      });
    google.maps.event.addListener(marker,'click',function(){
        var position = map.getZoom();
        map.setZoom(18);
        map.setCenter(marker.getPosition());
        window.setTimeout(function(){
          map.setZoom(position);
        },3000);
    });

  }
