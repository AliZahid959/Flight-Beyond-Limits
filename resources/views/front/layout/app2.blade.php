<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{$setting->site_name}}</title>
		<meta name="keywords" content="IBN FIRNAS" />
		<meta name="description" content="IBN FIRNAS">
		<meta name="author" content="IBN FIRNAS">
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{$setting->site_favicon}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{$setting->site_favicon}}">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/vendor/magnific-popup/magnific-popup.min.css')}}">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('front/assets/css/theme-shop.css')}}">
		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/demos/demo-business-consulting-2.css')}}">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('front/assets/css/skins/skin-business-consulting-2.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('front/assets/css/custom.css')}}">
		<!-- Head Libs -->
		<script src="{{asset('front/assets/vendor/modernizr/modernizr.min.js')}}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <style>
        .featured-boxes-style-4 .featured-box .box-content{
            transition: transform 0.5s !important;
        }
        .featured-boxes-style-4 .featured-box .box-content:hover{
            transform: scale(1.1) !important;
        }
        .carousel-control-next-icon{
            position: relative !important;
            top: 290px !important;
        }
        .carousel-control-prev-icon{
            position: relative !important;
            top: 290px !important;
        }
        .carousel-item {
            transform: scale(1);
            max-height: 100vh;
            min-height: calc(100vh-180px);
            overflow: hidden;
        }
        .sliderTitle {
            font-family: Roboto;
            font-size: 50px;
            display: none;
            top: calc(50vh - height);
            left: -10vw;
            color: white;
            position: absolute;
            transition: all 0.5s;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 5px 15px;
        }
        .active .sliderTitle {
            display: block;
            top: 50vh;
            left: 10vw;
        }
        .sliderSubtitle {
            display: none;
            top: 50vh;
            left: -10vw;
            color: white;
            position: absolute;
            transition: all 0.5s;
            background-color: rgba(0, 0, 0, 0.3);
            padding: 5px 15px;
        }
        .active .sliderSubtitle {
            display: block;
            top: 50vh;
            margin-top: 100px;
            left: 10vw;
        }
        #carouselExampleIndicators {
            position: relative;
            min-height: 100vh;

        }
        .containerVideobg {
            background-color: var(--second);
            position: absolute;
            top: 0px;
            left: 0px;
            z-index: -2;
            padding: 0 !important;
            max-height: 100vh;
            overflow: hidden;
        }
        #header .header-column {

            flex-grow: 0 !important;
        }
        @media(max-width:600px) {
            #header .header-column {
                flex-grow: 1 !important;
            }
        }
        .videoSliderBackground {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            min-width: 100vh;
            min-height: 100vh;
        }
        .videoSlider {
            margin-left: auto;
            margin-right: auto;
            margin-top: 180px;
            width: 40%;
            transition: all 0.5s;
            border: 10px solid rgba(0, 0, 0, 0.3);
            background-color: black !important;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.3);
        }
        .elVideo {
            width: 100%;
            height: 100%;
        }
        .active .videoSlider {
            margin-top: 0;
            width: 100%;
            border: none;
            box-shadow: none;
        }


/* CSS Multiple Whatsapp Chat */
 .whatsapp-name {
	 font-size: 16px;
	 font-weight: 600;
	 padding-bottom: 0;
	 margin-bottom: 0;
	 line-height: 0.5;
}
 #whatsapp-chat {
	 box-sizing: border-box !important;
	 outline: none !important;
	 position: fixed;
	 width: 350px;
	 border-radius: 10px;
	 box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
	 bottom: 90px;
	 overflow: hidden;
	 z-index: 99;
	 animation-name: showchat;
	 animation-duration: 1s;
	 transform: scale(1);
}
 a.blantershow-chat {
	/* background: #009688;
	 */
	 background: #fff;
	 color: #404040;
	 position: fixed;
	 display: flex;
	 font-weight: 400;
	 justify-content: space-between;
	 z-index: 98;
	 bottom: 25px;
	 font-size: 15px;
	 padding: 10px 20px;
	 border-radius: 30px;
	 box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}
 a.blantershow-chat svg {
	 transform: scale(1.2);
	 margin: 0 10px 0 0;
}
 .header-chat {
	/* background: linear-gradient(to right top, #6f96f3, #164ed2);
	 */
	 background: #009688;
	 background: #095e54;
	 color: #fff;
	 padding: 20px;
}
 .header-chat h3 {
	 margin: 0 0 10px;
}
 .header-chat p {
	 font-size: 14px;
	 line-height: 1.7;
	 margin: 0;
}
 .info-avatar {
	 position: relative;
}
 .info-avatar img {
	 border-radius: 100%;
	 width: 50px;
	 float: left;
	 margin: 0 10px 0 0;
}
 a.informasi {
	 padding: 20px;
	 display: block;
	 overflow: hidden;
	 animation-name: showhide;
	 animation-duration: 0.5s;
}
 a.informasi:hover {
	 background: #f1f1f1;
}
 .info-chat span {
	 display: block;
}
 #get-label, span.chat-label {
	 font-size: 12px;
	 color: #888;
}
 #get-nama, span.chat-nama {
	 margin: 5px 0 0;
	 font-size: 15px;
	 font-weight: 700;
	 color: #222;
}
 #get-label, #get-nama {
	 color: #fff;
}
 span.my-number {
	 display: none;
}
/* .blanter-msg {
	 color: #444;
	 padding: 20px;
	 font-size: 12.5px;
	 text-align: center;
	 border-top: 1px solid #ddd;
}
 */
 textarea#chat-input {
	 border: none;
	 font-family: "Arial", sans-serif;
	 width: 100%;
	 height: 43px;
	 outline: none;
	 resize: none;
	 padding: 10px;
	 font-size: 14px;
}
 a#send-it {
	 width: 47px;
	 font-weight: 700;
	 padding: 10px 10px 0;
	 background: #eee;
}
 a#send-it svg {
	 fill: #a6a6a6;
	 height: 24px;
	 width: 24px;
}
 .first-msg {
	 background: transparent;
	 padding: 30px;
	 text-align: center;
}
 .first-msg span {
	 background: #e2e2e2;
	 color: #333;
	 font-size: 14.2px;
	 line-height: 1.7;
	 border-radius: 10px;
	 padding: 15px 20px;
	 display: inline-block;
}
 .start-chat .blanter-msg {
	 display: flex;
}
 #get-number {
	 display: none;
}
 a.close-chat {
	 position: absolute;
	 top: 5px;
	 right: 15px;
	 color: #fff;
	 font-size: 30px;
}
 @keyframes ZpjSY {
	 0% {
		 background-color: #b6b5ba;
	}
	 15% {
		 background-color: #111;
	}
	 25% {
		 background-color: #b6b5ba;
	}
}
 @keyframes hPhMsj {
	 15% {
		 background-color: #b6b5ba;
	}
	 25% {
		 background-color: #111;
	}
	 35% {
		 background-color: #b6b5ba;
	}
}
 @keyframes iUMejp {
	 25% {
		 background-color: #b6b5ba;
	}
	 35% {
		 background-color: #111;
	}
	 45% {
		 background-color: #b6b5ba;
	}
}
 @keyframes showhide {
	 from {
		 transform: scale(0.5);
		 opacity: 0;
	}
}
 @keyframes showchat {
	 from {
		 transform: scale(0);
		 opacity: 0;
	}
}
 @media screen and (max-width: 480px) {
	 #whatsapp-chat {
		 width: auto;
		 left: 5%;
		 right: 5%;
		 font-size: 80%;
	}
}
 .hide {
	 display: none;
	 animation-name: showhide;
	 animation-duration: 0.5s;
	 transform: scale(1);
	 opacity: 1;
}
 .show {
	 display: block;
	 animation-name: showhide;
	 animation-duration: 0.5s;
	 transform: scale(1);
	 opacity: 1;
}
 .whatsapp-message-container {
	 display: flex;
	 z-index: 1;
}
 .whatsapp-message {
	 padding: 7px 14px 6px;
	 background-color: #fff;
	 border-radius: 0px 8px 8px;
	 position: relative;
	 transition: all 0.3s ease 0s;
	 opacity: 0;
	 transform-origin: center top 0px;
	 z-index: 2;
	 box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
	 margin-top: 4px;
	 margin-left: -54px;
	 max-width: calc(100% - 66px);
}
 .whatsapp-chat-body {
	 padding: 20px 20px 20px 10px;
	 background-color: #e6ddd4;
	 position: relative;
}
 .whatsapp-chat-body::before {
	 display: block;
	 position: absolute;
	 content: "";
	 left: 0px;
	 top: 0px;
	 height: 100%;
	 width: 100%;
	 z-index: 0;
	 opacity: 0.08;
	 background-image: url("https://elfsight.com/assets/chats/patterns/whatsapp.png");
}
 .dAbFpq {
	 display: flex;
	 z-index: 1;
}
 .eJJEeC {
	 background-color: #fff;
	 width: 52.5px;
	 height: 32px;
	 border-radius: 16px;
	 display: flex;
	 -moz-box-pack: center;
	 justify-content: center;
	 -moz-box-align: center;
	 align-items: center;
	 margin-left: 10px;
	 opacity: 0;
	 transition: all 0.1s ease 0s;
	 z-index: 1;
	 box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
}
 .hFENyl {
	 position: relative;
	 display: flex;
}
 .ixsrax {
	 height: 5px;
	 width: 5px;
	 margin: 0px 2px;
	 border-radius: 50%;
	 display: inline-block;
	 position: relative;
	 animation-duration: 1.2s;
	 animation-iteration-count: infinite;
	 animation-timing-function: linear;
	 top: 0px;
	 background-color: #9e9da2;
	 animation-name: ZpjSY;
}
 .dRvxoz {
	 height: 5px;
	 width: 5px;
	 margin: 0px 2px;
	 background-color: #b6b5ba;
	 border-radius: 50%;
	 display: inline-block;
	 position: relative;
	 animation-duration: 1.2s;
	 animation-iteration-count: infinite;
	 animation-timing-function: linear;
	 top: 0px;
	 animation-name: hPhMsj;
}
 .kAZgZq {
	 padding: 7px 14px 6px;
	 background-color: #fff;
	 border-radius: 0px 8px 8px;
	 position: relative;
	 transition: all 0.3s ease 0s;
	 opacity: 0;
	 transform-origin: center top 0px;
	 z-index: 2;
	 box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
	 margin-top: 4px;
	 margin-left: -54px;
	 max-width: calc(100% - 66px);
}
 .kAZgZq::before {
	 position: absolute;
	 background-image: url("data:image/png;
	base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
	 background-position: 50% 50%;
	 background-repeat: no-repeat;
	 background-size: contain;
	 content: "";
	 top: 0px;
	 left: -12px;
	 width: 12px;
	 height: 19px;
}
 .bMIBDo {
	 font-size: 13px;
	 font-weight: 700;
	 line-height: 18px;
	 color: rgba(0, 0, 0, 0.4);
}
 .iSpIQi {
	 font-size: 14px;
	 line-height: 19px;
	 margin-top: 4px;
	 color: #111;
}
 .iSpIQi {
	 font-size: 14px;
	 line-height: 19px;
	 margin-top: 4px;
	 color: #111;
}
 .cqCDVm {
	 text-align: right;
	 margin-top: 4px;
	 font-size: 12px;
	 line-height: 16px;
	 color: rgba(17, 17, 17, 0.5);
	 margin-right: -8px;
	 margin-bottom: -4px;
}




        </style>
        @yield('css')
	</head>
	<body data-plugin-cursor-effect>
    <div class="body">
        @include('front.layout.header2')
        @yield('content')
        <div id='whatsapp-chat' class='hide'>
            <div class='header-chat'>
              <div class='head-home'>
                <div class='info-avatar'><img src="{{asset('front/assets/img/Favicon.png')}}" /></div>
                <p class="text-light"><span class="whatsapp-name">IBN FIRNAS</span><br><small>Typically replies within an hour</small></p>

              </div>
              <div class='get-new hide'>
                <div id='get-label'></div>
                <div id='get-nama'></div>
              </div>
            </div>
            <div class='home-chat'>

            </div>
            <div class='start-chat'>
              <div pattern="https://elfsight.com/assets/chats/patterns/whatsapp.png" class="WhatsappChat__Component-sc-1wqac52-0 whatsapp-chat-body">
                <div class="WhatsappChat__MessageContainer-sc-1wqac52-1 dAbFpq">
                  <div style="opacity: 0;" class="WhatsappDots__Component-pks5bf-0 eJJEeC">
                    <div class="WhatsappDots__ComponentInner-pks5bf-1 hFENyl">
                      <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotOne-pks5bf-3 ixsrax"></div>
                      <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotTwo-pks5bf-4 dRvxoz"></div>
                      <div class="WhatsappDots__Dot-pks5bf-2 WhatsappDots__DotThree-pks5bf-5 kXBtNt"></div>
                    </div>
                  </div>
                  <div style="opacity: 1;" class="WhatsappChat__Message-sc-1wqac52-4 kAZgZq">
                    <div class="WhatsappChat__Author-sc-1wqac52-3 bMIBDo">IBN FIRNAS</div>
                    <div class="WhatsappChat__Text-sc-1wqac52-2 iSpIQi">Hi there 👋<br><br>How can I help you?</div>
                  </div>
                </div>
              </div>

              <div class='blanter-msg'>
                <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
                <a href='javascript:void;' id='send-it'><svg viewBox="0 0 448 448"><path d="M.213 32L0 181.333 320 224 0 266.667.213 416 448 224z"/></svg></a>

              </div>
            </div>
            <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
          </div>
          <a class='blantershow-chat' href='javascript:void' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg>Welcome to IBN FIRNAS
            How can we help you?</a>
        @include('front.layout.footer2')
    </div>
    @yield('script')
    <script type="text/javascript">
        $("img").lazyload({
            effect : "fadeIn"
        });
    </script>
    <!-- Vendor -->
    <script src="{{asset('front/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/popper/umd/popper.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/lazysizes/lazysizes.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/isotope/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('front/assets/vendor/vivus/vivus.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('front/assets/js/theme.js')}}"></script>
    <!-- Current Page Vendor and Views -->
    <!-- Current Page Vendor and Views -->
    <script src="{{asset('front/assets/js/views/view.contact.js')}}"></script>
    <!-- Demo -->
    <script src="{{asset('front/assets/js/demos/demo-business-consulting-2.js')}}"></script>
    <!-- Theme Custom -->
    <script src="{{asset('front/assets/js/custom.js')}}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{asset('front/assets/js/theme.init.js')}}"></script>
    <script>
        $('.my_slider').owlCarousel({
            stagePadding: 200,
            loop: true,
            margin: 10,
            items: 12,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 60
                },
                600: {
                    items: 1,
                    stagePadding: 100
                },
                1000: {
                    items: 1,
                    stagePadding: 200
                },
                1200: {
                    items: 1,
                    stagePadding: 250
                },
                1400: {
                    items: 1,
                    stagePadding: 300
                },
                1600: {
                    items: 1,
                    stagePadding: 350
                },
                1800: {
                    items: 1,
                    stagePadding: 400
                }
            }
        })
        var playerSettings = {
            controls: ['play-large'],
            fullscreen: {
                enabled: false
            },
            resetOnEnd: true,
            hideControls: true,
            clickToPlay: true,
            keyboard: false,
        }
        $('.video-section').on('translated.owl.carousel', function(event) {
            players.forEach(function(instance, index1) {
                instance.pause();
            });
        });
    </script>


<script>
    /* Whatsapp Chat Widget by www.bloggermix.com */
$(document).on("click", "#send-it", function() {
  var a = document.getElementById("chat-input");
  if ("" != a.value) {
    var b = $("#get-number").text(),
      c = document.getElementById("chat-input").value,
      d = "https://web.whatsapp.com/send",
      e = b,
      f = "&text=" + c;
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    )
      var d = "whatsapp://send";
    var g = d + "?phone=+968 9909 7595" + e + f;
    window.open(g, "_blank");
  }
}),
  $(document).on("click", ".informasi", function() {
    (document.getElementById("get-number").innerHTML = $(this)
      .children(".my-number")
      .text()),
      $(".start-chat,.get-new")
        .addClass("show")
        .removeClass("hide"),
      $(".home-chat,.head-home")
        .addClass("hide")
        .removeClass("show"),
      (document.getElementById("get-nama").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-nama")
        .text()),
      (document.getElementById("get-label").innerHTML = $(this)
        .children(".info-chat")
        .children(".chat-label")
        .text());
  }),
  $(document).on("click", ".close-chat", function() {
    $("#whatsapp-chat")
      .addClass("hide")
      .removeClass("show");
  }),
  $(document).on("click", ".blantershow-chat", function() {
    $("#whatsapp-chat")
      .addClass("show")
      .removeClass("hide");
  });

</script>

</body>
</html>
