@include('head')

<?php 

//buscar todas las personas 
$usuarios = DB::select('SELECT * FROM [amor_on_line].[dbo].[USUARIOS] ORDER BY NEWID()');
$my_usuario = DB::select('SELECT * FROM [amor_on_line].[dbo].[USUARIOS] WHERE ID_USUARIO = '.Session::get('ID_USUARIO'));

use \App\Http\Controllers\selectController;
use App\Http\Controllers\sp\fachadaController;

$SEXOS = selectController::Data_in_select( "SEXO", "ID_SEXO", "3" );
$ZODIACO = selectController::Data_in_select( "ZODIACO", "ID_ZODIACO", "3" );
$RELIGION = selectController::Data_in_select( "RELIGION", "ID_RELIGION", "3" );
$MASCOTA = selectController::Data_in_select( "MASCOTA", "ID_MASCOTA", "3" );
$COLOR_CABELLO = selectController::Data_in_select( "COLOR_CABELLO", "ID_COLOR_CABELLO", "3" );
$MUDARSE = selectController::Data_in_select( "MUDARSE", "ID_MUDARSE", "3" );
$TIPO_RELACION = selectController::Data_in_select( "TIPO_RELACION", "ID_TIPO_RELACION", "3" );
$MAS_HIJOS = selectController::Data_in_select( "MAS_HIJOS", "ID_MAS_HIJOS", "3" );
$HIJOS = selectController::Data_in_select( "HIJOS", "ID_HIJOS", "3" );
$ESTADO_CIVIL = selectController::Data_in_select( "ESTADO_CIVIL", "ID_ESTADO_CIVIL", "3" );
$FUMA = selectController::Data_in_select( "FUMA", "ID_FUMA", "3" );
$BEBE = selectController::Data_in_select( "BEBE", "ID_BEBE", "3" );
$BELLO_FACIAL = selectController::Data_in_select( "BELLO_FACIAL", "ID_BELLO_FACIAL", "3" );
$ETNIA = selectController::Data_in_select( "ETNIA", "ID_ETNIA", "3" );
$TIPO_CUERPO = selectController::Data_in_select( "TIPO_CUERPO", "ID_TIPO_CUERPO", "3" );
$PESO = selectController::Data_in_select( "PESO", "ID_PESO", "3" );
$ESTATURA = selectController::Data_in_select( "ESTATURA", "ID_ESTATURA", "3" );
$VISION = selectController::Data_in_select( "VISION", "ID_VISION", "3" );
$COLOR_OJOS = selectController::Data_in_select( "COLOR_OJOS", "ID_COLOR_OJOS", "3" );
$TIPO_CABELLO = selectController::Data_in_select( "TIPO_CABELLO", "ID_TIPO_CABELLO", "3" );
$LONGITUD_CABELLO = selectController::Data_in_select( "LONGITUD_CABELLO", "ID_LONGITUD_CABELLO", "3" );
$PAIS = selectController::Data_in_select( "PAIS", "ID_PAIS", "0" );
$CIUDAD = selectController::Data_in_select( "CIUDAD", "ID_CIUDAD", "0" );

$mis_fotos = fachadaController::SP_ADMINISTRAR_FOTOS(0, 
            Session::get('ID_USUARIO'),
            's',
            1);

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
											<?php
                                            //foto perfil 
                                            $foto = DB::select('SELECT * FROM [amor_on_line].[dbo].[FOTOS] WHERE ID_USUARIO = '.$my_usuario[0]->ID_USUARIO.' ORDER BY NEWID()');
                                            ?>
                                            @if(sizeof($foto) <= 0)
                                                <img style="width:150px;height:150px;" src="/assets/icon/perfil.jpg">
                                            @endif
                                            @if(sizeof($foto) > 0)
                                                <img style="width:150px;height:150px;" src="{{ $foto[0]->URL_FOTO }}">
                                            @endif
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
														<img style="width:30px;height:30px;"  src="{{ $foto[0]->URL_FOTO }}">
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
										<h3>{{ $my_usuario[0]->NOMBRE }}</h3>
										<div class="star-descp">
											<span>{{ $my_usuario[0]->DESCRIPCION }} || {{ $my_usuario[0]->TITULO_PERFIL }}</span>
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
														<span>Albúm</span>
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
                                                        $foto = DB::select('SELECT * FROM [amor_on_line].[dbo].[FOTOS] WHERE ID_USUARIO = '.$my_usuario[0]->ID_USUARIO.' ORDER BY NEWID()');
                                                        ?>
                                                        @if(sizeof($foto) <= 0)
                                                            <img style="width:50px;height:50px;" src="/assets/icon/perfil.jpg">
                                                        @endif
                                                        @if(sizeof($foto) > 0)
                                                            <img style="width:50px;height:50px;" src="{{ $foto[0]->URL_FOTO }}">
                                                        @endif												
														<div class="usy-name">
															<h3>{{ $my_usuario[0]->NOMBRE }}</h3>
															<span><img src="http://gambolthemes.net/workwise_demo/HTML/images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="http://gambolthemes.net/workwise_demo/HTML/images/icon8.png" alt=""><span>{{ $my_usuario[0]->ID_SEXO }}</span></li>
														<li><img src="http://gambolthemes.net/workwise_demo/HTML/images/icon9.png" alt=""><span>{{ $my_usuario[0]->ID_PAIS }}||{{ $my_usuario[0]->ID_CIUDAD }}</span></li>
													</ul>
												</div>
												<div class="job_descp">
													<form>
                                                        <div class="input-group form-group">
                                                            <input type="text" style="width:8%;" class="form-control" name="NOMBRE" id="NOMBRE" placeholder="NOMBRE">
                                                            <input type="date" class="form-control" name="FECHA_NACIMIENTO" id="FECHA_NACIMIENTO" onchange="registro.edad()" placeholder="FECHA NACIMIENTO">
                                                            <input type="text" style="width:60px;"  name="EDAD" id="EDAD" placeholder="EDAD" disabled>
                                                        </div>
                                                        <div class="input-group form-group">
                                                            <input type="email" class="form-control" name="CORREO_ELECTRONICO" id="CORREO_ELECTRONICO" placeholder="CORREO ELECTRONICO">
                                                            <input type="password" class="form-control" name="PASSWORD" id="PASSWORD" placeholder="PASSWORD">
                                                        </div>
                                                        <div class="input-group form-group">
                                                            <select class="form-control" name="ID_PAIS" id="ID_PAIS">
                                                            <option value="0">SELECCIONE PAIS</option>
                                                            @foreach($PAIS as $obj)
                                                                <option value="{{ $obj->ID_PAIS }}">{{ $obj->S_IDIOMA }}</option>
                                                            @endforeach
                                                            </select>
                                                            <select class="form-control" name="ID_CIUDAD" id="ID_CIUDAD">
                                                            <option value="0">SELECCIONE CIUDAD</option>
                                                            @foreach($CIUDAD as $obj)
                                                                <option value="{{ $obj->ID_CIUDAD }}">{{ $obj->S_IDIOMA }}</option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="input-group form-group">
                                                            <textarea type="text" class="form-control" name="TITULO_PERFIL" id="TITULO_PERFIL" placeholder="TITULO PERFIL"></textarea>
                                                            <textarea type="text" class="form-control" name="DESCRIPCION" id="DESCRIPCION" placeholder="DESCRIPCIÓN"></textarea>
                                                        </div>
                                                        <div class="input-group form-group">
                                                            <select class="form-control" name="ID_SEXO" id="ID_SEXO">
                                                            <option value="0">SELECCIONE SEXO</option>
                                                            @foreach($SEXOS as $obj)
                                                                <option value="{{ $obj->ID_SEXO }}">{{ $obj->S_IDIOMA }}</option>
                                                            @endforeach
                                                            </select>
                                                            <select class="form-control" name="ID_RELIGION" id="ID_RELIGION">
                                                            <option value="0">SELECCIONE RELIGION</option>
                                                            @foreach($RELIGION as $obj)
                                                                <option value="{{ $obj->ID_RELIGION }}">{{ $obj->S_IDIOMA }}</option>
                                                            @endforeach
                                                            </select>
                                                            <select class="form-control" name="ID_ZODIACO" id="ID_ZODIACO">
                                                            <option value="0">SELECCIONE ZODIACO</option>
                                                            @foreach($ZODIACO as $obj)
                                                                <option value="{{ $obj->ID_ZODIACO }}">{{ $obj->S_IDIOMA }}</option>
                                                            @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <div onclick="guardar()"  class="btn float-right login_btn">Guardar</div>
                                                        </div>
                                                    </form>
												</div>
											</div><!--post-bar end-->
											
											
											<div class="process-comm">
												<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/process-icon.png" alt=""></a>
											</div><!--process-comm end-->
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
										<div class="user-profile-ov">
											<form>
                                                <div class="input-group form-group">
                                                    <select class="form-control" name="ID_ESTADO_CIVIL" id="ID_ESTADO_CIVIL">
                                                    <option value="0">SELECCIONE ESTADO CIVIL</option>
                                                    @foreach($ESTADO_CIVIL as $obj)
                                                        <option value="{{ $obj->ID_ESTADO_CIVIL }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_TIPO_RELACION" id="ID_TIPO_RELACION">
                                                    <option value="0">SELECCIONE TIPO_RELACION</option>
                                                    @foreach($TIPO_RELACION as $obj)
                                                        <option value="{{ $obj->ID_TIPO_RELACION }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group form-group">
                                                    <select class="form-control" name="ID_HIJOS" id="ID_HIJOS">
                                                    <option value="0">SELECCIONE HIJOS</option>
                                                    @foreach($HIJOS as $obj)
                                                        <option value="{{ $obj->ID_HIJOS }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="NUMERO_HIJOS" id="NUMERO_HIJOS">
                                                    <option value="0">SELECCIONE NUMERO DE HIJOS</option>
                                                    @foreach([0,1,2,3,4,5,6,7,8,9,10] as $obj)
                                                        <option value="{{ $obj }}">{{ $obj }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_MAS_HIJOS" id="ID_MAS_HIJOS">
                                                    <option value="0">SELECCIONE SI MAS HIJOS</option>
                                                    @foreach($MAS_HIJOS as $obj)
                                                        <option value="{{ $obj->ID_MAS_HIJOS }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group form-group">
                                                    <select class="form-control" name="ID_BEBE" id="ID_BEBE">
                                                    <option value="0">SELECCIONE BEBE</option>
                                                    @foreach($BEBE as $obj)
                                                        <option value="{{ $obj->ID_BEBE }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_FUMA" id="ID_FUMA">
                                                    <option value="0">SELECCIONE FUMA</option>
                                                    @foreach($FUMA as $obj)
                                                        <option value="{{ $obj->ID_FUMA }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group form-group">
                                                    <select class="form-control" name="ID_MUDARSE" id="ID_MUDARSE">
                                                    <option value="0">SELECCIONE MUDARSE</option>
                                                    @foreach($MUDARSE as $obj)
                                                        <option value="{{ $obj->ID_MUDARSE }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_ETNIA" id="ID_ETNIA">
                                                    <option value="0">SELECCIONE ETNIA</option>
                                                    @foreach($ETNIA as $obj)
                                                        <option value="{{ $obj->ID_ETNIA }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_MASCOTA" id="ID_MASCOTA">
                                                    <option value="0">SELECCIONE MASCOTA</option>
                                                    @foreach($MASCOTA as $obj)
                                                        <option value="{{ $obj->ID_MASCOTA }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group form-group">
                                                    <textarea name="CARACTERISTICAS_BUSCADAS" class="form-control" id="CARACTERISTICAS_BUSCADAS" placeholder="CARACTERISTICAS BUSCADAS"></textarea>						
                                                </div>
                                                <div class="form-group">
                                                    <div onclick="registro.siguiente(2)" class="btn float-right login_btn">Siguiente</div>
                                                </div>
                                            </form>
										</div><!--user-profile-ov end-->

                                        <div class="user-profile-ov">
											<form>
                                                <div class="input-group form-group">
                                                    <select class="form-control" name="ID_LONGITUD_CABELLO" id="ID_LONGITUD_CABELLO">
                                                    <option value="0">SELECCIONE LONGITUD CABELLO</option>
                                                    @foreach($LONGITUD_CABELLO as $obj)
                                                        <option value="{{ $obj->ID_LONGITUD_CABELLO }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_COLOR_CABELLO" id="ID_COLOR_CABELLO">
                                                    <option value="0">SELECCIONE COLOR_CABELLO</option>
                                                    @foreach($COLOR_CABELLO as $obj)
                                                        <option value="{{ $obj->ID_COLOR_CABELLO }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_TIPO_CABELLO" id="ID_TIPO_CABELLO">
                                                    <option value="0">SELECCIONE TIPO CABELLO</option>
                                                    @foreach($TIPO_CABELLO as $obj)
                                                        <option value="{{ $obj->ID_TIPO_CABELLO }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group form-group">
                                                    <select class="form-control" name="ID_COLOR_OJOS" id="ID_COLOR_OJOS">
                                                    <option value="0">SELECCIONE COLOR_OJOS</option>
                                                    @foreach($COLOR_OJOS as $obj)
                                                        <option value="{{ $obj->ID_COLOR_OJOS }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_VISION" id="ID_VISION">
                                                    <option value="0">SELECCIONE VISION</option>
                                                    @foreach($VISION as $obj)
                                                        <option value="{{ $obj->ID_VISION }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group form-group">
                                                    <select class="form-control" name="ID_ESTATURA" id="ID_ESTATURA">
                                                    <option value="0">SELECCIONE ESTATURA</option>
                                                    @foreach($ESTATURA as $obj)
                                                        <option value="{{ $obj->ID_ESTATURA }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_PESO" id="ID_PESO">
                                                    <option value="0">SELECCIONE PESO</option>
                                                    @foreach($PESO as $obj)
                                                        <option value="{{ $obj->ID_PESO }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="input-group form-group">
                                                    <select class="form-control" name="ID_TIPO_CUERPO" id="ID_TIPO_CUERPO">
                                                    <option value="0">SELECCIONE TIPO_CUERPO</option>
                                                    @foreach($TIPO_CUERPO as $obj)
                                                        <option value="{{ $obj->ID_TIPO_CUERPO }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                    <select class="form-control" name="ID_BELLO_FACIAL" id="ID_BELLO_FACIAL">
                                                    <option value="0">SELECCIONE BELLO_FACIAL</option>
                                                    @foreach($BELLO_FACIAL as $obj)
                                                        <option value="{{ $obj->ID_BELLO_FACIAL }}">{{ $obj->S_IDIOMA }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div onclick="registro.guardar();" class="btn float-right login_btn">Guardar</div>
                                                </div>
                                            </form>
										</div><!--user-profile-ov end-->
										
									</div><!--product-feed-tab end-->
                                    
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Albúm</h3>
											<div class="gallery_pf">
												<div class="row">
                                                @foreach($mis_fotos as $galeria)
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="{{ $galeria->URL_FOTO }}" alt="">
															<a href="#" title=""><img src="http://gambolthemes.net/workwise_demo/HTML/images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
                                                @endforeach
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<img style="width:100%;" src="/assets/icon/add.svg" alt="">
													</div>

                                                    <form method="POST" action="/save_file" accept-charset="UTF-8" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Nuevo Archivo</label>
                                                            <div class="col-md-6">
                                                                <input type="file" class="form-control" name="file" >
                                                            </div>
                                                            <input type="text" id="id" name="id" value="{{ Session::get('ID_USUARIO') }}">
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                                        </div>
                                                        </div>
                                                    </form>
												</div>
											</div><!--gallery_pf end-->
										</div><!--portfolio-gallery-sec end-->
									</div><!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									
									<div class="widget widget-portfolio">
										<div class="wd-heady">
											<h3>Portfolio</h3>
											<img src="http://gambolthemes.net/workwise_demo/HTML/images/photo-icon.png" alt="">
										</div>
										<div class="pf-gallery">
											<div class="row">
                                            @foreach($mis_fotos as $galeria)
												<div class="col-lg-6 col-md-6 col-sm-2 col-6"><div class="gallery_pt"><img  src="{{ $galeria->URL_FOTO }}" alt=""></div></div>
											@endforeach
											</div>
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