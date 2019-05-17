@include('head')

<?php 

//buscar todas las personas 
$usuarios = DB::select('SELECT * FROM [amor_on_line].[dbo].[USUARIOS] ORDER BY NEWID()');

?>


  <body class="">	

	<div class="wrapper">
		@include('menu')

        <section class="cover-sec">
		</section>


        <main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
											<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/user-pro-img.png" alt="">
										</div><!--user-pro-img end-->
										<div class="user_pro_status">
											<ul class="flw-status">
												<li>
													<span>Following</span>
													<b>34</b>
												</li>
												<li>
													<span>Followers</span>
													<b>155</b>
												</li>
											</ul>
										</div><!--user_pro_status end-->
									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Mis Amigos</h3>
										</div><!--sd-title end-->
										<div class="suggestions-list">
											@foreach($usuarios as $user)
											<div class="suggestion-usd">
												<a href="/perfil/{{ $user->ID_USUARIO }}">
													<?php
													//foto perfil 
													$foto = DB::select('SELECT * FROM [amor_on_line].[dbo].[FOTOS] WHERE ID_USUARIO = '.$user->ID_USUARIO.' ORDER BY NEWID()');
													?>
													@if(sizeof($foto) <= 0)
														<img style="width:30px;height:30px;" src="/assets/icon/perfil.jpg">
													@endif
													@if(sizeof($foto) > 0)
														<img class="pf-gallery" src="{{ $foto[0]->URL_FOTO }}">
													@endif
													<div class="sgt-text">
														<h4>{{ $user->NOMBRE }}</h4>
														<span>{{ $user->TITULO_PERFIL }}</span>
													</div>
												</a>
												<span><a href="/mensajes"><img style="width:30px;padding:5px;" src="/assets/icon/mensajes.svg"></a></span>
											</div>
											@endforeach
											<div class="view-more">
												<a href="/topTen" title="">View More</a>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3>{{ $resultado[0]->NOMBRE }}</h3>
										<div class="star-descp">
											<span>{{ $resultado[0]->DESCRIPCION }} || {{ $resultado[0]->TITULO_PERFIL }}</span>
										</div><!--star-descp end-->
										<div class="tab-feed">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="http://gambolthemes.net/workwise_demo/HTML/images/ic1.png" alt="">
														<span>Datos personales</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<img src="http://gambolthemes.net/workwise_demo/HTML/images/ic2.png" alt="">
														<span>Información general</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<img src="http://gambolthemes.net/workwise_demo/HTML/images/ic3.png" alt="">
														<span>Otros datos</span>
													</a>
												</li>
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<?php
														//foto perfil 
														$foto = DB::select('SELECT * FROM [amor_on_line].[dbo].[FOTOS] WHERE ID_USUARIO = '.$user->ID_USUARIO.' ORDER BY NEWID()');
														?>
														@if(sizeof($foto) <= 0)
															<img style="width:20%;" src="/assets/icon/perfil.jpg">
														@endif
														@if(sizeof($foto) > 0)
															<img style="width:20%;" src="{{ $foto[0]->URL_FOTO }}">
														@endif
													
														<div class="usy-name">
															<h3>{{ $resultado[0]->NOMBRE }}</h3>
															<span><img src="http://gambolthemes.net/workwise_demo/HTML/images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="http://gambolthemes.net/workwise_demo/HTML/images/icon8.png" alt=""><span>{{ $resultado[0]->ID_SEXO }}</span></li>
														<li><img src="http://gambolthemes.net/workwise_demo/HTML/images/icon9.png" alt=""><span>{{ $resultado[0]->ID_PAIS }}||{{ $resultado[0]->ID_CIUDAD }}</span></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Senior Wordpress Developer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
												</div>
											</div><!--post-bar end-->
											
											
											<div class="process-comm">
												<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/process-icon.png" alt=""></a>
											</div><!--process-comm end-->
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
										<div class="user-profile-ov">
											<h3>Overview</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov st2">
											<h3>Experience</h3>
											<h4>Web designer</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
											<h4>UI / UX Designer</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id.</p>
											<h4>PHP developer</h4>
											<p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Education</h3>
											<h4>Master of Computer Science</h4>
											<span>2015 - 2017</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. </p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Location</h3>
											<h4>India</h4>
											<p>151/4 BT Chownk, Delhi </p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3>Skills</h3>
											<ul>
												<li><a href="#" title="">HTML</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">CSS</a></li>
												<li><a href="#" title="">Javascript</a></li>
												<li><a href="#" title="">Wordpress</a></li>
												<li><a href="#" title="">Photoshop</a></li>
												<li><a href="#" title="">Illustrator</a></li>
												<li><a href="#" title="">Corel Draw</a></li>
											</ul>
										</div><!--user-profile-ov end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Portfolio</h3>
											<div class="gallery_pf">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img1.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img2.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img3.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img4.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img5.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img6.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img7.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img8.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img9.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-img10.jpg" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
												</div>
											</div><!--gallery_pf end-->
										</div><!--portfolio-gallery-sec end-->
									</div><!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="#" title=""><i class="fa fa-envelope"></i> Message</a>
									</div>
									<div class="widget widget-portfolio">
										<div class="wd-heady">
											<h3>Portfolio</h3>
											<img src="http://gambolthemes.net/workwise_demo/HTML/images/photo-icon.png" alt="">
										</div>
										<div class="pf-gallery">
											<ul>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery1.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery2.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery3.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery4.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery5.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery6.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery7.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery8.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery9.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery10.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery11.png" alt=""></a></li>
												<li><a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/pf-gallery12.png" alt=""></a></li>
											</ul>
										</div><!--pf-gallery end-->
									</div><!--widget-portfolio end-->
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>



@include('footer')