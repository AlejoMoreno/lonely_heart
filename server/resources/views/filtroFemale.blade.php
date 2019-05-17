
@include('head')

  <body class="">	

  <?php 
  
  if( Session::has('ID_USUARIO') ){
	  ?>


	<div class="wrapper">

		
		@include('menu')

		<?php 
		
		//buscar todas las personas 
		$usuarios = DB::select('SELECT * FROM [amor_on_line].[dbo].[USUARIOS] ORDER BY NEWID()');

		//$sp = DB::select("EXEC [amor_on_line].[dbo].[SP_SEXO] ?",[1]);
		//print_r($sp);
		?>

		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							
							@include('leftProfile')

							<div class="col-lg-9 col-md-8 no-pd">
								<div class="main-ws-sec">
									
									<!--se pueden realizar cambios -->
									<div class="row posts-section">
										<!-- ciclo -->
										@foreach($usuarios as $user)
										<div class="col-lg-3 post-bar" >
											<a href="/perfil/{{ $user->ID_USUARIO }}">
												<div class="user-specs1">
													<?php
													//foto perfil 
													$foto = DB::select('SELECT * FROM [amor_on_line].[dbo].[FOTOS] WHERE ID_USUARIO = '.$user->ID_USUARIO.' ORDER BY NEWID()');
													?>
													@if(sizeof($foto) <= 0)
														<div style="width:170px;height:100px;background: url(/assets/icon/perfil.jpg) no-repeat center center;background-size:cover;"></div>
													@endif
													@if(sizeof($foto) > 0)
														<div style="width:170px;height:100px;background: url({{ $foto[0]->URL_FOTO }}) no-repeat center center;background-size:cover;"></div>
													@endif
													
													<h3>
														<!-- //1-INACTIVO 2-ACTIVO -->
														@if($user->ID_ESTADO_PERSONA == 1) 
															<label style="width:10px;height:10px;padding:5px;background:red;border-radius: 200px 200px 200px 200px;"></label>
														@endif
														@if($user->ID_ESTADO_PERSONA == 2) 
															<label style="width:10px;height:10px;padding:5px;background:#91e842;border-radius: 200px 200px 200px 200px;"></label>
														@endif										
														{{ $user->NOMBRE }}
													</h3>
													<span style="width:100%;">{{ $user->TITULO_PERFIL }} / {{ $user->DESCRIPCION }}</span>
													<hr>
													<!-- //1-hombre 2-mujer -->
													@if($user->ID_SEXO == 1) 
														<a href="/filtroMale"><img style="width:30px;padding:5px;" src="/assets/icon/male.svg"></a>
													@endif
													@if($user->ID_SEXO == 2) 
														<a href="/filtroFemale"><img style="width:30px;padding:5px;" src="/assets/icon/female.svg"></a>
													@endif
													@if($user->ID_SEXO > 2) 
														<a href="/filtroFemalemale"><img style="width:30px;padding:5px;" src="/assets/icon/lgtb.jpg"></a>
													@endif
													
													<a href="/mensajes"><img style="width:30px;padding:5px;" src="/assets/icon/mensajes.svg"></a>
													<a href="#" onclick=""><img style="width:30px;padding:5px;" src="/assets/icon/like.svg"></a>
													<a href="#" onclick=""><img style="width:30px;padding:5px;" src="/assets/icon/dontlike.svg"></a>
												</div>
											</a>
										</div><!--post-bar end-->
										@endforeach
										<!--fin ciclo-->
									</div><!--posts-section end-->
									<!--FIN de los pueden realizar cambios -->


								</div><!--main-ws-sec end-->
							</div>
							

						</div>
					</div><!-- main-section-data end-->
				</div> 
			</div>
		</main>

@include('footer')


	  <?php
  }
  else{
	  
	  ?>

		@include('nosession')

	  <?php
  }
  

  ?>


