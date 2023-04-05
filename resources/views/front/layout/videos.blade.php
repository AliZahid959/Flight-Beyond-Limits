
<style>

.video-section .item{
	opacity:0.4;
	transition:.4s ease all;
	margin:0 20px;
	transform:scale(.8);
  }
  
  @media(max-width:1000px){
	.video-section .item{margin:0; transform:scale(.9)}
  }
  
  .video-section .active .item{
	opacity:1;
	transform:scale(1);
  } 
  
  body{
	margin:80px 0 0 0;
  }
  
  .video-section .owl-item {
	  -webkit-backface-visibility: hidden;
	  -webkit-transform: translateZ(0) scale(1.0, 1.0);
  }
  
  .video-section video{
	max-width:100%;
	height:auto;
  }

</style>

<section id="video_section my-5">
    <div class="owl-carousel video-section my-5">
        <div class="item">
           <div>
              <video autoplay loop muted class="js-player" crossorigin playsinline poster="{{asset('front/assets/video/main.mp4')}}">
                 <source src="{{asset('front/assets/video/main.mp4')}}" type="video/mp4" size="720">
              </video>
           </div>
        </div>
        <div class="item">
           <div>
              <video autoplay loop muted class="js-player" crossorigin playsinline poster="{{asset('front/assets/video/home1.mp4')}}">
                 <source src="{{asset('front/assets/video/home1.mp4')}}" type="video/mp4" size="720">
              </video>
           </div>
        </div>
          <div class="item">
          <div>
          <video autoplay loop muted class="js-player" crossorigin playsinline poster="{{asset('front/assets/video/home2.mp4')}}">
             <source src="{{asset('front/assets/video/home2.mp4')}}" type="video/mp4" size="720">
            </video>
          </div>
      </div>
    </div>
</section>

<script>

$('.owl-carousel').owlCarousel({
    stagePadding: 200,
    loop:true,
    margin:10,
    items:1,
    nav:true,
  responsive:{
        0:{
            items:1,
            stagePadding: 60
        },
        600:{
            items:1,
            stagePadding: 100
        },
        1000:{
            items:1,
            stagePadding: 200
        },
        1200:{
            items:1,
            stagePadding: 250
        },
        1400:{
            items:1,
            stagePadding: 300
        },
        1600:{
            items:1,
            stagePadding: 350
        },
        1800:{
            items:1,
            stagePadding: 400
        }
    }
})

var playerSettings = {
      controls : ['play-large'],
      fullscreen : { enabled: true},
      resetOnEnd : true,
      hideControls  :true,
  clickToPlay:true,
      keyboard : false,
    }

const players = Plyr.setup('.js-player', playerSettings);

 players.forEach(function(instance,index) {
            instance.on('play',function(){
                players.forEach(function(instance1,index1){
                  if(instance != instance1){
                        instance1.pause();
                    }
                });
            });
        });

$('.video-section').on('translated.owl.carousel', function (event) {
  players.forEach(function(instance,index1){
                  instance.pause();
                });
});

   

</script>