<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

		<!-- Bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- Custom styles -->
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
   </head>
   <body>

   <div id="fixed-right-menu">
   	<ul class="list-unstyled">
   		<li><a href="#">Home</a></li>
   		<li><a href="#">About</a></li>
   		<li><a href="#">Features</a></li>
   		<li><a href="#">Prices</a></li>
   		<li><a href="#">Feedback</a></li>
   		<li><a href="#">Team</a></li>
   		<li><a href="#">Contact</a></li>
   		<li><a href="{{ url('/login') }}">Login</a></li>
   		<li><a href="{{ url('/register') }}">Sign Up</a></li>
   	</ul>
   </div>


	<nav class="navbar navbar-default">
	<div class="container">
	<div class="nav-header hidden-sm hidden-md">
		<a href="#">Startup<span>ly</span></a>
	</div>
	<div id="navicon" class="visible-xs-inline-block pull-right">
		<i class="fa fa-bars" aria-hidden="true"></i>
	</div>
	<div class="navbar-menu hidden-xs">
		<div class="navbar-menu-left">
			<ul class="list-inline list-unstyled">
				<li><a id="home" href="#" class="active">Home</a></li>
				<li><a id="liAbout" href="#">About</a></li>
				<li><a id="liFeatures" href="#">Features</a></li>
				<li><a id="liPrices" href="#">Prices</a></li>
				<li><a id="liFeedback" href="#">Feedback</a></li>
				<li><a id="liTeam" href="#">Team</a></li>
				<li><a id="liContacts" href="#">Contacts</a></li>
				<li class="extra">
					<a type="button" class="extra">
						Extra
						<i class="fa fa-caret-down"></i>
					</a>
					<ul class="extra list-unstyled">
						<li class="homepages">
							<a type="button" class="homepages">Homepages</a>
							<i class="fa fa-caret-right"></i>
							<ul class="list-unstyled homepages">
								<li><a href="#">Default</a></li>
								<li><a href="#">Clicked</a></li>
								<li><a href="#">Falanfilan</a></li>
								<li><a href="#">Smth</a></li>
								<li><a href="#">Smth else</a></li>
								<li><a href="#">ok thing</a></li>
								<li><a href="#">Not that</a></li>
							</ul>
						</li>
						<li class="blog">
							<a type="button" class="blog">Blog</a>
							<i class="fa fa-caret-right"></i>
							<ul class="blog list-unstyled">
								<li><a href="#">List</a></li>
								<li><a href="#">Post</a></li>
							</ul>
						</li>
						<li class="ecommerce">
							<a type="button" class="ecommerce">Ecommerce</a>
							<i class="fa fa-caret-right"></i>
							<ul class="ecommerce list-unstyled">
								<li><a href="#">Product Grid</a></li>
								<li><a href="#">Product List</a></li>
								<li><a href="#">Product Page</a></li>
								<li><a href="#">Payment Confirmation</a></li>
							</ul>
						</li>
						<li><a href="#">Registration</a></li>
						<li><a href="#">Forms</a></li>
						<li><a href="#">Shortcodes</a></li>
					</ul>
				</li>

			</ul>
		</div>
		<div class="navbar-menu-right">
			<ul class="list-inline list-unstyled">
				@if($user)
               Hi,{{ $user->name }}
            @else
               <li><a href="{{ url('/login') }}" class="btn">Login</a></li>
               <li><a href="{{ url('/register') }}" class="btn">Sign Up</a></li>
            @endif
			</ul>
		</div>
	</div>
	</div>
	</nav>

	<section id="header">
		<div class="container fadeIn">
			<h1>{{ $user->header->heading }}</h1>
			<h3>{{ $user->header->paragraph }}</h3>
			<ul class="list-inline list-unstyled">
				<li>
   				<a href="{{ $user->header->button_1_address }}" class="btn">
   						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
   						{{ $user->header->button_1_name }}
   				</a>
            </li>
				<li><a href="{{ $user->header->button_2_address }}" class="btn">{{ $user->header->button_2_name }}</a></li>
			</ul>
		</div>
	</section>

	<section id="logos" class="bggray">
	<div class="container">
		<ul class="list-inline list-unstyled">
			<li><img id="item1" class="logo" src="img/logoText.png" ></li>
			<li><img id="item2" class="logo" src="img/logoText.png" ></li>
			<li><img id="item3" class="logo" src="img/logoText.png" ></li>
			<li><img id="item4" class="logo" src="img/logoText.png" ></li>
			<li><img id="item5" class="logo" src="img/logoText.png" ></li>
		</ul>
	</div>
	</section>

	<section id="process" class="bgwhite">
		<div class="container">
			<ul class="list-inline list-unstyled tabs">
				<li id="tab1" class="active"><a>First Tab</a></li>
				<li id="tab2"><a>Second Tab</a></li>
				<li id="tab3"><a>Third Tab</a></li>
			</ul>
			<!-- Item 1 -->
				<!-- TAB 1 -->
			<div class="item row" id="item11">
				<div class="itemImg col-md-6 col-sm-6 col-xs-12 animateRight"><img src="img/people.jpg" class="img-responsive"></div>
				<div class="itemContent col-md-6 col-sm-6 col-xs-12 animateLeft" style="text-align:center">
					<h3>For every <span>startup</span></h3>
					<p style="padding-left:95px;padding-right:95px">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
					<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
					<ul class="list-inline list-unstyled">
					<li><button class="btn">Get Template</a></button></li>
					<li><button class="btn">See Elements</button></li>
				</ul>
				</div>
			</div>
				<!-- TAB 2 -->
			<div class="item row" id="item12">
				<div class="itemContent col-md-6 col-sm-6 col-xs-12 animateRight" style="text-align:center">
					<h3>New Age <span>Technology</span></h3>
					<p style="padding-left:95px;padding-right:95px">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
					<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
					<ul class="list-inline list-unstyled">
					<li><button class="btn">Get Template</a></button></li>
					<li><button class="btn">See Elements</button></li>
				</ul>
				</div>
				<div class="itemImg col-md-6 col-sm-6 col-xs-12 animateLeft"><img src="img/phone.jpg" class="img-responsive"></div>
			</div>
				<!-- TAB 3 -->
			<div class="item row" id="item13">
				<div class="itemContent col-md-12 col-sm-12 col-xs-12" style="text-align:center">
					<h3 class="scaleIn">3 Easy Steps</h3>
					<p class="scaleIn" style="padding-left:95px;padding-right:95px">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
						<div class="animateDown col-md-4 col-sm-4 col-xs-12">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<h4>Place Order</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
						</div>
						<div class="animateDown col-md-4 col-sm-4 col-xs-12">
							<i class="fa fa-magnet" aria-hidden="true"></i>
							<h4>Our System Runs</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
						</div>
						<div class="animateDown col-md-4 col-sm-4 col-xs-12">
							<i class="fa fa-tachometer" aria-hidden="true"></i>
							<h4>Receive Report</h4>
							<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
						</div>
				</div>
			</div>
			<!-- Item 2 -->
			<div class="item row" id="item2">
				<div class="itemContent col-md-6 col-sm-6 col-xs-12 animateRight" style="text-align:left">
					<h3>New age <span>technology</span></h3>
					<p style="padding-right:190px">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
					<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
				</div>
				<div class="itemImg col-md-6 col-sm-6 col-xs-12 animateLeft"><img src="img/mac.png" class="img-responsive"></div>
			</div>
			<!-- Item 3 -->
			<div class="item row" id="item3">
				<div class="itemImg col-md-6 col-sm-6 col-xs-12 animateRight"><img src="img/helmet.jpg" class="img-responsive"></div>
				<div class="itemContent col-md-6 col-sm-6 col-xs-12 animateLeft" style="text-align:right">
					<h3>Hang <span>on to</span> your helmet</h3>
					<p style="padding-left:130px">Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
					<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="features" class="bggray">
		<div class="container">
			<div class="col-md-12 col-lg-4">
					<div id="featureTab1" class="active col-lg-12 col-md-4 col-sm-4 col-xs-4">
						<h5>Lorem dolor</h5>
					<p>Sit amet, consectetur adipiscing elit hac divisione rem ipsam prorsus</p>
					</div>
					<div id="featureTab2" class="col-lg-12 col-md-4 col-sm-4 col-xs-4">
						<h5>Lorem dolor</h5>
					<p>Sit amet, consectetur adipiscing elit hac divisione rem ipsam prorsus</p>
					</div>
					<div id="featureTab3" class="col-lg-12 col-md-4 col-sm-4 col-xs-4">
						<h5>Lorem dolor</h5>
					<p>Sit amet, consectetur adipiscing elit hac divisione rem ipsam prorsus</p>
					</div>
			</div>
			<div id="featureImg" class="col-md-12 col-lg-8">
				<img id="featureImg1" src="img/laptop.png" class="img-responsive">
				<img id="featureImg2" src="img/tablet.png" class="rotateAroundY img-responsive">
				<img id="featureImg3" src="img/laptopNphone.png" class="animateLeft img-responsive">
			</div>
		</div>
	</section>

	<section id="featuresList" class="bgwhite">
		<div class="container">
			<div class="row animateLeft">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<i class="fa fa-cloud-download" aria-hidden="true"></i>
					<h6>Feature 1</h6>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					<h6>Feature 2</h6>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<i class="fa fa-desktop" aria-hidden="true"></i>
					<h6>Feature 3</h6>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<h6>Feature 4</h6>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
				</div>
			</div>
			<div class="row animateRight">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<i class="fa fa-magic" aria-hidden="true"></i>
					<h6>Feature 5</h6>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
					<h6>Feature 6</h6>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h6>Feature 7</h6>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<i class="fa fa-star" aria-hidden="true"></i>
					<h6>Feature 8</h6>
				<p>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="subscription">
		<div class="container">
			<div class="animateRight col-lg-5 col-md-12">
				<h2>Get Live Updates</h2>
			<p>No spam promise - only latest news and prices!</p>
			</div>
		<div class="animateLeft col-lg-7 col-md-12">
			<div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1 col-lg-4 col-lg-offset-0">
				<input type="text" placeholder="Your name">
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
				<input type="text" placeholder="your@email.com">
			</div>
			<div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
				<button class="btn">Subscribe</button>
			</div>
		</div>
		</div>
	</section>

	<section id="packages" class="bgwhite">
		<div class="animateUp container">
			<div class="row sectionHeader">
				<h1>Product <span>Packages</span></h1>
				<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
			</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="package disabled">
				<h1>Individual</h1>
				<div class="price">
					<h2><span>$</span>19</h2>
					<p>Per Month</p>
				</div>
				<div class="description">
					<ul class="list-unstyled">
						<li><b>Free</b> Domain</li>
						<li><b>Unlimited</b> Websites</li>
						<li><b>Unlimited</b> Bandwidth</li>
						<li><b>Unlimited</b> Disk Space</li>
					</ul>
					<button class="btn">Get Started</button>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="package">
				<h1>Studio</h1>
				<div class="price">
					<h2><span>$</span>29</h2>
					<p>Subscription</p>
				</div>
				<div class="description">
					<ul class="list-unstyled">
						<li><b>Free</b> Domain</li>
						<li><b>Unlimited</b> Websites</li>
						<li><b>Unlimited</b> Bandwidth</li>
						<li><b>Unlimited</b> Disk Space</li>
					</ul>
					<button class="btn">Get Started</button>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="package">
				<h1>Enterprise</h1>
				<div class="price">
					<h2><span>$</span>49</h2>
					<p>Per Month</p>
				</div>
				<div class="description">
					<ul class="list-unstyled">
						<li><b>Free</b> Domain</li>
						<li><b>Unlimited</b> Websites</li>
						<li><b>Unlimited</b> Bandwidth</li>
						<li><b>Unlimited</b> Disk Space</li>
					</ul>
					<button class="btn">Get Started</button>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section id="awards" class="bgwhite">
		<div class="animateDown container">
			<div class="row sectionHeader">
				<h1>
				<span>Our</span> Awards
			</h1>
			<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
			</div>
			<ul class="list-inline list-unstyled">
				<li><img src="img/logoText.png"></li>
				<li><img src="img/logoText.png"></li>
				<li><img src="img/logoText.png"></li>
				<li><img src="img/logoText.png"></li>
			</ul>
		</div>
	</section>

	<section id="clientQuote">
		<div class="animateDown container">
			<div class="row sectionHeader">
				<h1>What <span>Clients</span> Say</h1>
			</div>
			<div id="quote1" class="quote container">
				<div class="col-md-1 col-md-offset-1 col-xs-1 col-xs-offset-1">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
				</div>
				<div class="col-md-8 col-xs-8">
					<p>CLIENT 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.</p>
				</div>
				<div class="col-md-1 col-xs-1">
					<i class="fa fa-quote-right" aria-hidden="true"></i>
				</div>
			</div>
			<div id="quote2" class="quote container">
				<div class="col-md-1 col-md-offset-1 col-xs-1 col-xs-offset-1">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
				</div>
				<div class="col-md-8 col-xs-8">
					<p>CLIENT 2 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.</p>
				</div>
				<div class="col-md-1 col-xs-1">
					<i class="fa fa-quote-right" aria-hidden="true"></i>
				</div>
			</div>
			<div id="quote3" class="quote container">
				<div class="col-md-1 col-md-offset-1 col-xs-1 col-xs-offset-1">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
				</div>
				<div class="col-md-8 col-xs-8">
					<p>CLIENT 3 - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.</p>
				</div>
				<div class="col-md-1 col-xs-1">
					<i class="fa fa-quote-right" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</section>

	<section id="client" class="bgwhite">
		<div class="animateDown container">
			<div class="col-md-10 col-md-offset-1">
				<div id="client1" class="col-md-4 col-sm-4 col-xs-12">
					<div class="clientImg">
						<img src="img/client1.jpg">
					</div>
					<div class="clientAbout">
						<h1>Amy Warner</h1>
					<h2>Investor Hunter at <span>Pear Inc.</span></h2>
					</div>
				</div>
				<div id="client2" class="col-md-4 col-sm-4 col-xs-12 active">
					<div class="clientImg">
						<img src="img/client2.jpg">
					</div>
					<div class="clientAbout">
						<h1>John Doesome</h1>
					<h2>Accountant at <span>Vell Inc.</span></h2>
					</div>
				</div>
				<div id="client3" class="col-md-4 col-sm-4 col-xs-12">
					<div class="clientImg">
						<img src="img/client1.jpg">
					</div>
					<div class="clientAbout">
						<h1>Peter Moosome</h1>
					<h2>Marketing VP at <span>Footbook</span></h2>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="team" class="bgwhite">

		<div class="container">
			<div class="row sectionHeader">
				<h1>Behind <span>The</span> Scenes</h1>
				<p>Lorem ipsum dolor sit atmet sit dolor greand fdanrh sdfs sit atmet sit dolor greand fdanrh sdfs</p>
				<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.</p>
			</div>
			<div id="teamMember1" class="col-md-3  col-sm-3 col-xs-6">
				<div class="animateDown teamMember">
					<div class="overlap">
					<div class="memberImg">
						<img src="img/team1.jpg">
					</div>
					<div class="memberAbout">
						<p class="hidden-md hidden-sm hidden-xs">Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
						<ul class="list-inline list-usntyled">
							<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<h1>Mike Bolder</h1>
				<h2>Developer</h2>
				</div>
			</div>
			<div id="teamMember2" class="col-md-3  col-sm-3 col-xs-6">
				<div class="animateUp teamMember">
					<div class="overlap">
					<div class="memberImg">
						<img src="img/team2.jpg">
					</div>
					<div class="memberAbout">
						<p class="hidden-md hidden-sm">Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
						<ul class="list-inline list-usntyled">
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div>
				<h1>Mike Bolder</h1>
				<h2>Developer</h2>
				</div>
			</div>
			<div id="teamMember3" class="col-md-3  col-sm-3 col-xs-6">
				<div class="animateDown teamMember">
					<div class="overlap">
					<div class="memberImg">
						<img src="img/team3.jpg">
					</div>
					<div class="memberAbout">
						<p class="hidden-md hidden-sm">Ellen has over 13 years of experience in development projects as a senior consultant and project manager in the areas of project management.</p>
						<ul class="list-inline list-usntyled">
							<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<h1>Mike Bolder</h1>
				<h2>Developer</h2>
				</div>
			</div>
			<div id="teamMember4" class="col-md-3  col-sm-3 col-xs-6">
				<div class="animateUp teamMember">
					<div class="overlap">
					<div class="memberImg">
						<img src="img/team4.jpg">
					</div>
					<div class="memberAbout">
						<p class="hidden-md hidden-sm">Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
						<ul class="list-inline list-usntyled">
							<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<h1>Mike Bolder</h1>
				<h2>Developer</h2>
				</div>
			</div>

		</div>
	</section>

	<section id="launch">
		<div class="container">
			<div class="col-md-1 col-xs-12">
				<i class="fa fa-power-off" aria-hidden="true"></i>
			</div>
			<div class="col-md-8 col-xs-12">
				<h1>Launch your startup now</h1>
			<p>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</p>
			</div>
			<div class="col-md-3 col-xs-12">
				<button class="btn">
					Get This Template
				</button>
			</div>
		</div>
	</section>

	<section id="footer">
		<div class="container">
			<div class="col-md-4 col-sm-4 col-xs-12">
			<h1>Startuply</h1>
			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</p>
			<h3>John Doeson, Founder.</h3>
		</div>
		<div class="col-md-5 col-sm-5 col-xs-12">
			<h2>Social Networks</h2>
			<div class="socialNetworks">
				<div class="socialItem">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</div>
				<div class="socialItem">
					<i class="fa fa-skype" aria-hidden="true"></i>
				</div>
				<div class="socialItem">
					<i class="fa fa-google-plus-official" aria-hidden="true"></i>
				</div>
				<div class="socialItem">
					<i class="fa fa-pinterest" aria-hidden="true"></i>
				</div>
				<div class="socialItem">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</div>
				<div class="socialItem">
					<i class="fa fa-google-plus-official" aria-hidden="true"></i>
				</div>
				<div class="socialItem">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</div>
				<div class="socialItem">
					<i class="fa fa-skype" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h2>Our Contacts</h2>
			<ul class="list-unstyled">
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@startup.ly">info@startup.ly</a></li>
				<li>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span>2901 Marmora road, Glassgow, Seattle, WA 98122-1090</span>
				</li>
				<li>
					<i class="fa fa-phone" aria-hidden="true"></i>
					<span>1 - 234-456-7980</span>
				</li>
			</ul>
		</div>
		</div>
		<div class="row">
			<span>startup.ly 2014. All rights reserved</span>
		</div>
	</section>

	<i id="toTop" class="fa fa-chevron-up" aria-hidden="true"></i>
       	<!--[if lt IE 8]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
		<script src="assets/js/jquery-3.1.0.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
		<script src="assets/js/vendor/bootstrap.min.js"></script>
		<script src="assets/js/plugins.js"></script>
   	<script src="assets/js/main.js"></script>

    </body>
</html>
