<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('Front/images/favicon.png') }}">

    <!-- Stylesheets ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/dark.css') }}" type="text/css" />

    <!-- Crowdfunding Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('Front/css/crowdfunding.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('Front/css/news.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/fonts.css') }}" type="text/css" />

    <!-- / -->
    <link rel="stylesheet" href="{{ asset('Front/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/custom.css') }}" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('Front/include/rs-plugin/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Front/include/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Front/include/rs-plugin/css/navigation.css') }}">

    <link rel="stylesheet" href="{{ asset('Front/css/colors.php?color=209EBB') }}" type="text/css" />
    <meta name="viewport"       content="width=device-width, initial-scale=1" />
    <meta property="og:image" content="{{asset('Front/images/ASSOCIATION LITHA SANTE-logo-.png')}}" />

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="{{ asset('Front/css/components/datepicker.css') }}" type="text/css" />

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="{{ asset('Front/css/components/bs-filestyle.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('Front/css/custom.css') }}" type="text/css" />

        <!---Ratings--->
	<link rel="stylesheet" href="{{ asset('Front/css/components/bs-rating.css') }}" type="text/css" />
    <!--home projet lien--->
    <link rel="stylesheet" href="{{ asset('Front/css/multi_image.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Front/css/register.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500&family=IBM+Plex+Serif:wght@400;500;600&family=Playfair+Display&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/swiper.css')}}" type="text/css" />

	<!-- Covid Care Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('demos/covid-care/covid-care.css')}}" type="text/css" /> <!-- Covid Care Custom Css -->
	<link rel="stylesheet" href="{{asset('demos/covid-care/css/fonts.css')}}" type="text/css" /> <!-- Covid Care Custom Fonts -->
	<!-- / -->

	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="css/colors.php?color=0F6458" type="text/css" />
    <!-- Title ===================================================== -->
    <title>ASSOCIATION LITHA SANTE @yield('title')</title>


</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <!-- Login/Register Modal ================================== -->
        <header id="header" class="header-size-sm border-bottom-0" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-5">
							<a href="index.html" class="standard-logo" data-dark-logo="demos/business/images/logo-dark.png"><img src="demos/business/images/logo.png" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="demos/business/images/logo-dark@2x.png"><img src="demos/business/images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">
							<a href="demo-nonprofit-causes-single.html" class="button button-rounded button-light"><div>Contactez-nous</div></a>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows me-lg-auto">

							<ul class="menu-container align-self-start">
								<li class="menu-item"><span class="menu-bg col-auto align-self-start d-flex"></span></li>
								<li class="menu-item current"><a class="menu-link" href="/"><div>Accueil</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{route('about')}}"><div>A appros de nous</div></a></li>
								{{-- <li class="menu-item"><a class="menu-link" href="demo-nonprofit-events.html"><div>Events</div></a></li> --}}
								<li class="menu-item"><a class="menu-link btn-contact" href="{{route('contacte')}}"><div>contact</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header>



        <!-- Main ================================================== -->
        <main >
            {{ $slot }}
        </main>

        <!-- Go To Top ============================================= -->
        <div id="gotoTop" class="icon-line-arrow-up"></div>
        <div class="promo promo-dark promo-full promo-uppercase bg-color footer-stick p-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg">
                                <h3 style="letter-spacing: 2px;">Le choix évident pour des soins de qualité.</h3>
                                <span class="nott">Votre bien-être est notre priorité</span>
                            </div>
                            <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                                <a href="#" class="button button-large button-border button-rounded button-light button-white m-0">Contatez-nous maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
        <footer id="footer" class="clearfix">
            <div id="copyrights" >
                <div class="container clearfix ">
                    <div class="row justify-content-between align-items-center ">
                        <div class="col-md-6">
                            Copyrights &copy; <?php echo date("Y"); ?> - <br>
                            <div class="copyright-links"><a href="https://www.yandoama.com/">Designe </a> / <a href="https://www.yandoama.com/">by YANDOAMA CONSULTING</a></div>
                        </div>

                        <div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
                            <div class="copyrights-menu copyright-links clearfix">
                                <a href="#">Savoir plus sur nous</a>/<a href="#">Contactez-nous</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer>

        <!-- Script ================================================ -->
        <script src="{{ asset('Front/js/jquery.js') }}"></script>
        <script src="{{ asset('js/axios.min.js') }}"></script>
        <script src="{{ asset('Front/js/plugins.min.js') }}"></script>
        <script src="{{ asset('Front/js/functions.js') }}"></script>
        <!-- DatePicker JS -->
	<script src="{{ asset('Front/js/components/datepicker.js') }}"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script src="{{ asset('Front/js/components/bs-filestyle.js') }}"></script>

	<!-- TinyMCE Plugin -->
	<script src="{{ asset('Front/js/components/tinymce/tinymce.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('Front/js/multi_image.js') }}"></script>
    <script src="{{ asset('Front/js/functions.js') }}"></script>
	<!-- Star Rating Plugin -->
	<script src="{{ asset('Front/js/components/star-rating.js') }}"></script>

	<script>
         $("#input-14").on("rating.change", function(event, value, caption) {
			$("#input-14").rating("refresh", {disabled: true, showClear: false});
		});
		jQuery(document).ready( function(){
			$('.dobpicker').datepicker({
				autoclose: true,
			});

			$("#jobs-application-resume").fileinput({
				required: true,
				browseClass: "btn btn-secondary",
				browseIcon: "",
				removeClass: "btn btn-danger",
				removeLabel: "",
				removeIcon: "<i class='icon-trash-alt1'></i>",
				showUpload: false
			});

			tinymce.init({
				selector: '#jobs-application-message',
				menubar: false,
				setup: function(editor) {
					editor.on('change', function(e) {
						editor.save();
					});
				}
			});
		})
	</script>



<script>

    // Navbar on hover
    $('.nav.tab-hover a.nav-link').hover(function() {
        $(this).tab('show');
    });

    // Current Date
    var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
        month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        a = new Date();

        jQuery('.date-today').html( weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate() );

    $(window).on( 'pluginCarouselReady', function(){
        $('#oc-news').owlCarousel({
            items: 1,
            margin: 20,
            dots: false,
            nav: true,
            navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
            responsive:{
                0:{ items: 1,dots: true, },
                576:{ items: 1,dots: true },
                768:{ items: 2,dots:true },
                992:{ items: 2 },
                1200:{ items: 3 }
            }
        });
    });

</script>
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script> --}}
        <script src="{{ asset('js/share.js') }}"></script>
    </div>

</body>
</html>
