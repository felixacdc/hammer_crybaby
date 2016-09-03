<div class="navbar-container">
	<div class="navbar navbar-default navbar-scroll-fixed">
		<div class="navbar-default-wrap">
			<div class="container">
				<div class="navbar-wrap">
					<div class="navbar-header">
						<button data-target=".primary-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar bar-top"></span>
							<span class="icon-bar bar-middle"></span>
							<span class="icon-bar bar-bottom"></span>
						</button>
						<a class="cart-icon-mobile" href="#"><i class="elegant_icon_bag"></i> <span>0</span></a>
						<a class="navbar-brand" title="idea" href="index.html">
							<img class="logo" alt="idea" src="images/logo-white.png">
							<img class="logo-fixed" alt="idea" src="images/logo-fixed.png">
							<img class="logo-mobile" alt="idea" src="images/logo-mobile.png">
						</a>
					</div>
					<nav class="collapse navbar-collapse primary-navbar-collapse">
						<ul class="nav navbar-nav primary-nav">
							<li class="menu-item-has-children dropdown active">
								<a title="Inicio" href="#Inicio" class="dropdown-hover">
									<span class="underline">Inicio</span> <span class="caret"></span>
								</a>
								<!-- <ul class="dropdown-menu">
									<li><a title="Home 2" href="index-2.html">Home 2</a></li>
									<li><a title="Home 3" href="index-3.html">Home 3</a></li>
								</ul> -->
							</li>
							
							<li class="menu-item-has-children dropdown">
								<a title="Acerca de" href="#Acerca" class="dropdown-hover">
									<span class="underline">Acerca de</span> <span class="caret"></span>
								</a>
								<!-- <ul class="dropdown-menu">
									<li><a title="Blog Default" href="blog.html">Blog Default</a></li>
									<li><a title="Blog Masonry" href="blog-masonry.html">Blog Masonry</a></li>
									<li><a title="Blog Medium" href="blog-medium.html">Blog Medium</a></li>
									<li><a title="Blog Grid" href="blog-grid.html">Blog Grid</a></li>
									<li><a title="Blog Timeline" href="blog-timeline.html">Blog Timeline</a></li>
									<li><a title="Blog Detail" href="blog-detail.html">Blog Detail</a></li>
								</ul> -->
							</li>

							<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown bg_1">
								<a title="Servicios" href="#Servicios" class="dropdown-hover">
									<span class="underline">Servicios</span> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									@foreach($categories as $category)
										<li class="menu-item-has-children mega-col-4 dropdown">
											<h3 class="megamenu-title">{{ $category->description }}<span class="caret"></span></h3>
											<ul class="dropdown-menu">
												@foreach($category->locals as $local)
													<li><a title="Shop Full With" href="#Hosting">{{ $local->name }}</a></li>
												@endforeach
											</ul>
										</li>
									@endforeach
								</ul>
							</li>

							<li class="menu-item-has-children dropdown">
								<a title="Portafolio" href="#Portafolio" class="dropdown-hover">
									<span class="underline">Portafolio</span> <span class="caret"></span>
								</a>
								<!-- <ul class="dropdown-menu">
									<li><a title="Portfolio Style Default" href="portfolio-default.html">Le Gabban</a></li>
									<li><a title="Portfolio Style Two" href="portfolio-style-two.html">Purificadora Amigos del Rey</a></li>
									<li><a title="Portfolio Style Three" href="portfolio-style-three.html">Autollantas Chivalan</a></li>
									<li><a title="Portfolio Style Lily" href="portfolio-style-lily.html">Neumáticos del Sur</a></li>
									<li><a title="Portfolio Style Marley" href="portfolio-style-marley.html">Sarita Nail's</a></li>
									<li><a title="Portfolio Gallery Detail" href="portfolio-gallery-detail.html">idea</a></li>
									<li><a title="Portfolio Image Detail" href="portfolio-image-detail.html">Portfolio Image Detail</a></li>
									<li><a title="Portfolio Video Detail" href="portfolio-video-detail.html">Portfolio Video Detail</a></li>
								</ul> -->
							</li>
							<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown bg_2">
								<a title="Clientes" href="#Noticias" class="dropdown-hover">
									<span class="underline">Noticias</span> <span class="caret"></span>
								</a>
								<!-- <ul class="dropdown-menu">
									<li class="menu-item-has-children mega-col-4 dropdown">
										<h3 class="megamenu-title">Educativos<span class="caret"></span></h3>
										<ul class="dropdown-menu">
											<li><a title="Page Right Slidebar" href="page-right-sidebar.html">Colegio Buena Creación</a></li>
											<li><a title="Page Left Slidebar" href="page-left-sidebar.html">Colegio Nuevos Horizontes</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children mega-col-4 dropdown">
										<h3 class="megamenu-title">Comerciales<span class="caret"></span></h3>
										<ul class="dropdown-menu">
											<li><a title="Reservation Form" href="reservation-form.html">Salón y Spá Marbella</a></li>
										</ul>
									</li>
									<li class="visible-lg-inline mega-col-4"></li>
								</ul> -->
							</li>
							<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
								<a title="Contacto" href="/#Contacto" class="dropdown-hover">
									<span class="underline">Contacto</span> <span class="caret"></span>
								</a>
								<!-- <ul class="dropdown-menu">
									<li class="menu-item-has-children mega-col-3 dropdown">
										<h3 class="megamenu-title">1.Shortcodes <span class="caret"></span></h3>
										<ul class="dropdown-menu">
											<li><a title="Accordions" href="accordions.html">Accordions</a></li>
											<li><a title="Buttons" href="buttons.html">Buttons</a></li>
											<li><a title="Call to Action" href="call-to-action.html">Call to Action</a></li>
											<li><a title="Carousel Contents" href="carousel-contents.html">Carousel Contents</a></li>
											<li><a title="Client" href="client.html">Client</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children mega-col-3 dropdown">
										<h3 class="megamenu-title">2.Shortcodes <span class="caret"></span></h3>
										<ul class="dropdown-menu">
											<li><a title="Counter" href="counter.html">Counter</a></li>
											<li><a title="Google Maps" href="google-maps.html">Google Maps</a></li>
											<li><a title="IconBox" href="iconbox.html">IconBox</a></li>
											<li><a title="Message Boxes" href="message-boxes.html">Message Boxes</a></li>
											<li><a title="Modal" href="modal.html">Modal</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children mega-col-3 dropdown">
										<h3 class="megamenu-title">3.Shortcodes <span class="caret"></span></h3>
										<ul class="dropdown-menu">
											<li><a title="Pie Chart" href="pie-chart.html">Pie Chart</a></li>
											<li><a title="Pricing Table" href="pricing-table.html">Pricing Table</a></li>
											<li><a title="Progress Bars" href="progress-bars.html">Progress Bars</a></li>
											<li><a title="Responsive Video" href="responsive-video.html">Responsive Video</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children mega-col-3 dropdown">
										<h3 class="megamenu-title">4.Shortcodes <span class="caret"></span></h3>
										<ul class="dropdown-menu">
											<li><a title="Tabs" href="tabs.html">Tabs</a></li>
											<li><a title="Team Member" href="team-member.html">Team Member</a></li>
											<li><a title="Testimonial Slider" href="testimonial-slider.html">Testimonial Slider</a></li>
											<li><a title="Timelines" href="timelines.html">Timelines</a></li>
											<li><a title="ToolTip / Popover" href="tooltip-popover.html">ToolTip / Popover</a></li>
										</ul>
									</li>
								</ul> -->
							</li>
							<li class="navbar-search">
								<a class="navbar-search-button" href="#">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-form-wrap show-popup hide">
									<form class="searchform">
										<input type="search" class="searchinput" placeholder="Search..."/>
										<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
									</form>
								</div>
							</li>
							<!-- <li class="navbar-minicart">
								<a class="minicart-link" href="#">
									<span class="minicart-icon">
										<i class="elegant_icon_bag"></i><span>0</span>
									</span>
								</a>
								<div class="minicart">
									<div class="minicart-header">Your shopping bag is empty.</div>
									<div class="minicart-footer">
										<div class="minicart-actions clearfix">
											<a class="button pull-left" href="#">
												<span class="text">Go to the shop</span>
											</a>
										</div>
									</div>
								</div>
							</li> -->
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="header-search-overlay hide">
			<div class="container">
				<form class="searchform">
					<input type="search" class="searchinput" placeholder="Search..."/>
					<input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
				</form>
				<button type="button" class="close">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
			</div>
		</div>
	</div>
</div>