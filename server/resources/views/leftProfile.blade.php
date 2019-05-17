<?php 

//buscar todas las personas 
$usuarios = DB::select('SELECT * FROM [amor_on_line].[dbo].[USUARIOS] ORDER BY NEWID()');

?>

<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="/assets/icon/user-pic.png" alt="">
												</div>
											</div><!--username-dt end-->
											<div class="user-specs">
												<h3><script>document.write(localStorage.getItem("NOMBRE"));</script></h3>
												<span><script>document.write(localStorage.getItem("TITULO_PERFIL"));</script></span>
											</div>
										</div><!--user-profile end-->
										<ul class="user-fw-status">
											<a href="#filtroFollowing">
												<li>
													<h4>Following</h4>
													<span>34</span>
												</li>
											</a>
											<a href="#filtroFollowers">
												<li>
													<h4>Followers</h4>
													<span>155</span>
												</li>
											</a>
											<a href="#perfil">
												<li>
													<a href="#" title="">View Profile</a>
												</li>
											</a>
										</ul>
									</div><!--user-data end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3><label style="width:10px;height:10px;padding:5px;background:#91e842;border-radius: 200px 200px 200px 200px;"></label> Amigos en linea</h3>
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
														<img style="width:30px;height:30px;" src="{{ $foto[0]->URL_FOTO }}">
													@endif
													<div class="sgt-text">
														<h4>{{ $user->NOMBRE }}</h4>
														<span>{{ $user->TITULO_PERFIL }}</span>
													</div>
												</a>
												<span><a href="/mensajes"><img style="width:30px;padding:5px;" src="/assets/icon/mensajes.svg"></a></span>
											</div>
											@endforeach
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
									<div class="tags-sec full-width">
										<ul>
											<li><a href="#" title="">Help Center</a></li>
											<li><a href="#" title="">About</a></li>
											<li><a href="#" title="">Privacy Policy</a></li>
											<li><a href="#" title="">Cookies Policy</a></li>
											<li><a href="#" title="">Language</a></li>
											<li><a href="#" title="">Copyright Policy</a></li>
										</ul>
										<div class="cp-sec">
											<img style="width:60px;margin-top:-5px;" src="/assets/icon/logo.png" alt=""><p>My Soul Mate</p><br>
											<p><img src="/assets/icon/cp.png" alt="">Copyright 2017</p>
										</div>
									</div><!--tags-sec end-->
								</div><!--main-left-sidebar end-->
							</div>