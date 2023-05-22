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
    <meta property="og:image" content="{{asset('Front/images/platinum-logo-.png')}}" />

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
    <!-- Title ===================================================== -->
    <title>ASSOCIATION LITHA SANTE @yield('title')</title>

    @livewireStyles
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">
        <!-- Login/Register Modal ================================== -->




        <!-- Main ================================================== -->
        <main >
            {{ $slot }}
        </main>

        <!-- Go To Top ============================================= -->
        <div id="gotoTop" class="icon-line-arrow-up"></div>

        <!-- Footer ================================================ -->
        <footer id="footer" class="dark">

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
