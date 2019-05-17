
@include('head')

<?php 

print_r($chat);

?>

  <body class="">	

	<div class="wrapper">
		
		@include('menu')

        <section class="messages-page">
			<div class="container">
				<div class="messages-sec">
					<div class="row">
						<div class="col-lg-4 col-md-12 no-pdd">
							<div class="msgs-list">
								<div class="msg-title">
									<h3>Messages</h3>
									<ul>
										<li><a href="#" title=""><i class="fa fa-cog"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-ellipsis-v"></i></a></li>
									</ul>
								</div><!--msg-title end-->
								<div class="messages-list">
									<ul>
										<li class="active">
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/m-img1.png" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>John Doe</h3>
													<p>Lorem ipsum dolor <img src="http://gambolthemes.net/workwise_demo/HTML/images/smley.png" alt=""></p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
												<span class="msg-notifc">1</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/m-img2.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>David Vane</h3>
													<p>Vestibulum ac diam..</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/m-img3.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>Nancy Dilan</h3>
													<p>Quam vehicula.</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/m-img4.png" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>Norman Kenney</h3>
													<p>Nulla quis lorem ut..</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/m-img5.png" alt="">
													<span class="msg-status"></span>
												</div>
												<div class="usr-mg-info">
													<h3>James Dilan</h3>
													<p>Vivamus magna just..</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/m-img6.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>Mike Dorn</h3>
													<p>Praesent sapien massa.</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
										<li>
											<div class="usr-msg-details">
												<div class="usr-ms-img">
													<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/m-img7.png" alt="">
												</div>
												<div class="usr-mg-info">
													<h3>Patrick Morison</h3>
													<p>Convallis a pellente...</p>
												</div><!--usr-mg-info end-->
												<span class="posted_time">1:55 PM</span>
											</div><!--usr-msg-details end-->
										</li>
									</ul>
								</div><!--messages-list end-->
							</div><!--msgs-list end-->
						</div>
						<div class="col-lg-8 col-md-12 pd-right-none pd-left-none">
							<div class="main-conversation-box">
								<div class="message-bar-head">
									<div class="usr-msg-details">
										<div class="usr-ms-img">
											<img src="http://gambolthemes.net/workwise_demo/HTML/images/resources/m-img1.png" alt="">
										</div>
										<div class="usr-mg-info">
											<h3>{{ $usuario[0]->ID_USUARIO }}</h3>
											@if($usuario[0]->ID_ESTADO_PERSONA == 1)
												<p>Online</p>
											@endif
											@if($usuario[0]->ID_ESTADO_PERSONA == 2)
												<p>Offline</p>
											@endif
										</div><!--usr-mg-info end-->
									</div>
								</div><!--message-bar-head end-->
								<div class="messages-line">
									@foreach($chat as $mensaje)
										<!--si es el emisor-->
										@if($mensaje->ID_USUARIO_ENVIA == Session::get('ID_USUARIO'))
										<div class="main-message-box ta-right">
											<div class="message-dt">
												<div class="message-inner-dt">
													<p>{{ $mensaje->MENSAJE }}</p>
												</div><!--message-inner-dt end-->
												<span>{{ $mensaje->FECHA_ENVIO }}</span>
											</div><!--message-dt end-->
											<div class="messg-usr-img">
												<?php
												//foto perfil 
												$foto = DB::select('SELECT * FROM [amor_on_line].[dbo].[FOTOS] WHERE ID_USUARIO = '.$mensaje->ID_USUARIO_ENVIA.' ORDER BY NEWID()');
												?>
												@if(sizeof($foto) <= 0)
													<div style="border-radius:100px;width:50px;height:50px;background: url(/assets/icon/perfil.jpg) no-repeat center center;background-size:cover;"></div>
												@endif
												@if(sizeof($foto) > 0)
													<div style="border-radius:100px;width:50px;height:50px;background: url({{ $foto[0]->URL_FOTO }}) no-repeat center center;background-size:cover;"></div>
												@endif
											</div><!--messg-usr-img end-->
										</div><!--main-message-box end-->
										@endif

										<!--si es el receptor-->
										@if($mensaje->ID_USUARIO_ENVIA != Session::get('ID_USUARIO'))
										<div class="main-message-box st3">
											<div class="message-dt st3">
												<div class="message-inner-dt">
													<p>{{ $mensaje->MENSAJE }}</p>
												</div><!--message-inner-dt end-->
												<span>{{ $mensaje->FECHA_ENVIO }}</span>
											</div><!--message-dt end-->
											<div class="messg-usr-img">
												<?php
												//foto perfil 
												$foto = DB::select('SELECT * FROM [amor_on_line].[dbo].[FOTOS] WHERE ID_USUARIO = '.$mensaje->ID_USUARIO_ENVIA.' ORDER BY NEWID()');
												?>
												@if(sizeof($foto) <= 0)
													<div style="border-radius:100px; width:50px;height:50px;background: url(/assets/icon/perfil.jpg) no-repeat center center;background-size:cover;"></div>
												@endif
												@if(sizeof($foto) > 0)
													<div style="border-radius:100px;width:50px;height:50px;background: url({{ $foto[0]->URL_FOTO }}) no-repeat center center;background-size:cover;"></div>
												@endif
											</div><!--messg-usr-img end-->
										</div><!--main-message-box end-->
										@endif	
									@endforeach
									
								</div><!--messages-line end-->
								<div class="message-send-area">
									<form>
										<div class="mf-field">
											<input type="text" name="message" id="MENSAJES" placeholder="Type a message here">
											<input type="hidden" name="ID_USUARIO_RECIBE" id="ID_USUARIO_RECIBE" value="{{ $usuario[0]->ID_USUARIO }}">
											<input type="hidden" name="ID_ESTADO_MENSAJE" id="ID_ESTADO_MENSAJE" value="1">
											<div onclick="mensajes.send()" class="btn btn-success">Send</div>
										</div>
									</form>
								</div><!--message-send-area end-->
							</div><!--main-conversation-box end-->
						</div>
					</div>
				</div><!--messages-sec end-->
			</div>
		</section><!--messages-page end-->

		<script>
		var mensajes = new Mensajes();
		function Mensajes(){
			this.send = function(){
				var parametros = {
					"MENSAJES" : $('#MENSAJES').val(),
					"ID_USUARIO_RECIBE" : $('#ID_USUARIO_RECIBE').val(),
					"ID_ESTADO_MENSAJE" : $('#ID_ESTADO_MENSAJE').val()
				};
				$.ajax({
					type: 'post',
					url: '/mensajes',
					data: parametros,
					beforeSend: function () {
						$('#resultado').html('<p>Espere porfavor</p>');
					},
					success: function (response)  {
						console.log(response);
					}
				});
			};
		}
		</script>

        <footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="#" title="">Help Center</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="#" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="http://gambolthemes.net/workwise_demo/HTML/images/copy-icon2.png" alt="">Copyright 2017</p>
					<img class="fl-rgt" src="http://gambolthemes.net/workwise_demo/HTML/images/logo2.png" alt="">
				</div>
			</div>
		</footer>




@include('footer')