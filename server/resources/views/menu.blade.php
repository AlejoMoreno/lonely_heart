<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="/index" title=""><img style="width:50px;background:white;margin-top:-5px;margin-left:-30px;border-radius:100%;" src="/assets/icon/logo.png" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="/index" title="">
									<span><img src="/assets/icon/icon1.png" alt=""></span>
									Home
								</a>
							</li>
							<li>
								<a href="/localizacion" title="">
									<span><img src="/assets/icon/icon2.png" alt=""></span>
									localizacion
								</a>
							</li>
							<li>
								<a href="/busqueda" title="">
									<span><img src="/assets/icon/icon3.png" alt=""></span>
									busqueda
								</a>
							</li>
							<li>
								<a href="/topTen" title="">
									<span><img src="/assets/icon/icon5.png" alt=""></span>
									top 10
								</a>
							</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="/assets/icon/icon6.png" alt=""></span>
									Messages
								</a>
								<div class="notification-box msg">
									<div class="nott-list">
										@foreach([0,1,2,3,4] as $user)
											<a href="#chat" title="">
												<div class="notfication-details">
													<div class="noty-user-img">
														<img src="/assets/icon/ny-img1.png" alt="">
													</div>
													<div class="notification-info">
														<h3>Jassica William</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
														<span>2 min ago</span>
													</div><!--notification-info -->
												</div>
											</a>
										@endforeach										
						  				<div class="view-all-nots">
						  					<a href="/mensajes" title="">View All Messsages</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
							<li>
								<a href="/coincidencias" title="" class="not-box-open">
									<span><img src="/assets/icon/icon7.png" alt=""></span>
									Notificaciones
								</a>
							</li>
							<li>
								<a href="/exit" title="" class="not-box-open">
									<span><img src="/assets/icon/icon7.png" alt=""></span>
									Salir
								</a>
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="/assets/icon/user.png" alt="">
							<a href="/my_profile" title="">{{ Session::get('NOMBRE') }}</a>
						</div>
					
					</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
		</header><!--header end-->	