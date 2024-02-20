<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
        
        <!-- title of site -->
        <title>Biodata</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{asset('template bio/assets/logo/favicon.png')}}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{asset('template bio/assets/css/font-awesome.min.css')}}">

		<!--flat icon css-->
		<link rel="stylesheet" href="{{asset('template bio/assets/css/flaticon.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('template bio/assets/css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{asset('template bio/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('template bio/assets/css/owl.theme.default.min.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{asset('template bio/assets/css/bootstrap.min.css')}}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('template bio/assets/css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{asset('template bio/assets/css/style.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('template bio/assets/css/responsive.css')}}">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!-- top-area Start -->

		@include('layout/base_head')
		
		<!-- top-area End -->
	
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="header-text">
							<h2>hi <span>, im</span>  <br> Ikhsan <br> Warman <span>.</span>   </h2>
							<p>web developer</p>
							<a href="https://drive.google.com/file/d/1Z15Bu72Q12Oej_vUwy69vWb_WOr4kJcE/view?usp=sharing" target="_blank" download>download resume</a>
						</div><!--/.header-text-->
					</div><!--/.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!--/.welcome-hero-->
		<!--welcome-hero end -->

		<!--about start -->
		@include('layout/about')
		<!--about end -->
		
		<!--education start -->
		@include('layout/education')
		<!--education end -->

		<!--skills start -->
		@include('layout/skills')
		<!--skills end -->

		<!--experience start -->
		@include('layout/experience')
		<!--experience end -->

		<!--profiles start -->
		{{-- @include('layout/profile') --}}
		<!--profiles end -->

		<!--portfolio start -->
		@include('layout/portofolio')
		<!--portfolio end -->

		<!--contact start -->
		@include('layout/contact')
		<!--contact end -->

		<!--footer-copyright start-->
		@include('layout/base_foot')
		<!--footer-copyright end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		
		<!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>
		
		<!-- for progress bar start-->

		<!-- progressbar js -->
		<script src="assets/js/progressbar.js"></script>

		<!-- appear js -->
		<script src="assets/js/jquery.appear.js"></script>

		<!-- for progress bar end -->

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>