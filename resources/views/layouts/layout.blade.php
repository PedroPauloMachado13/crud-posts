<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Face2Abism</title>
<!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="{{ url('/css/fontawesome-all.min.css') }}">
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/magnific-popup.css') }}"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="{{ url('css/tooplate-style.css') }}">

	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>
</head>

<body>
	<!-- Loader
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div> -->

	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
                            @if(Auth::guard('web')->check())
                                <li>
                                    <a href="http://localhost/example/public/posts" id="tmNavLink1" class="scrolly active" data-bg-img="constructive_bg_01.jpg">
                                        <i class="fas fa-home tm-nav-fa-icon"></i>
                                        <span>Posts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/example/public/posts/create" id="tmNavLink2" class="scrolly" data-bg-img="constructive_bg_01.jpg">
                                        <i class="fas fa-plus tm-nav-fa-icon"></i>
                                        <span>Create</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://localhost/example/public/posts/search" class="scrolly" data-bg-img="constructive_bg_01.jpg">
                                        <i class="fas fa-search tm-nav-fa-icon"></i>
                                        <span>Search</span>
                                    </a>
                                </li>
                                <li>
                                    <!-- FAZER O FORM DE LOGOUT AQUI DEPOIS-->
                                    <a href="http://localhost/example/public/logout" class="scrolly" data-bg-img="constructive_bg_01.jpg">
                                        <i class="fas fa-user tm-nav-fa-icon"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="http://localhost/example/public/home" class="scrolly" data-bg-img="constructive_bg_01.jpg">
                                        <i class="fas fa-user tm-nav-fa-icon"></i>
                                        <span>Login</span>
                                    </a>
                                </li>
                            @endif
						</ul>
					</nav>
				</div>
			</div>

                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">
                    <!-- section 1 -->
                        <div class="container-fluid tm-main">
                            @yield('content')
                        </div>
                </div>	<!-- .tm-content -->

				<footer class="footer-link">
					<p class="tm-copyright-text">Copyright &copy; 2020 PEDRO PAULO INDUSTRIES</p>
				</footer>
			</div>	<!-- row -->
		</div>
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/jquery.backstretch.min.js') }}"></script>

	<script>

		var sidebarVisible = false;
		var currentPageID = "#tm-section-1";

  		// If there is enough room, stick the footer at the bottom of page content.
  		// If not, place it after the page content
  		function setupFooter() {

  			var padding = 100;
  			var footerPadding = 40;
  			var mainContent = $("section-1");
  			var mainContentHeight = mainContent.outerHeight(true);
  			var footer = $(".footer-link");
  			var footerHeight = footer.outerHeight(true);
  			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			var windowHeight = $(window).height();

  			if(totalPageHeight > windowHeight){
  				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				footer.css("bottom", footerHeight + "px");
  			}
  			else {
  				$(".tm-content").css("margin-bottom", "0");
  				footer.css("bottom", "20px");
  			}
  		}

  		// Everything is loaded including images.
      	$(window).on("load", function(){

      		// Render the page on modern browser only.
      		if(renderPage) {
				// Remove loader
		      	$('body').addClass('loaded');

		      	// Page transition
		      	var allPages = $(".tm-section");

		      	// Handle click of "Continue", which changes to next page
		      	// The link contains data-nav-link attribute, which holds the nav item ID
		      	// Nav item ID is then used to access and trigger click on the corresponding nav item
		      	/*var linkToAnotherPage = $("a.tm-btn[data-nav-link]");

			    if(linkToAnotherPage != null) {

			    	linkToAnotherPage.on("click", function(){
			    		var navItemToHighlight = linkToAnotherPage.data("navLink");
			    		$("a" + navItemToHighlight).click();
			    	});
			    }*/

		      	// Hide all pages
		      	//allPages.hide();

		      	$("#tm-section-1").fadeIn();

		     	// Set up background first page
		     	//var bgImg = $("#tmNavLink1").data("bgImg");

		     	//$.backstretch("img/" + bgImg, {fade: 500});

                 // Setup Carousel, Nav, and Nav Toggle
			    setupFooter();

			    // Resize Carousel upon window resize
			    $(window).resize(function() {
			    	setupFooter();
			    });
      		}
		});

		</script>
	</body>
</html>
