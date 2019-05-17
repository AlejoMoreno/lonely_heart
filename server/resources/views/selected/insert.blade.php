<?php 

//insertar tablas iniciales

echo 'SEXO:<hr>(MASCULINO,FEMENINO)';
DB::insert("INSERT INTO [dbo].[SEXO]  ([SEXO])  VALUES   ('MASCULINO') ");
DB::insert("INSERT INTO [dbo].[SEXO]  ([SEXO])  VALUES   ('FEMENINO') ");

echo '[ZODIACO]:<hr>(ARIES,TAURO,GEMINIS,CANCER,LEO,VIRGO,LIBRA)';
DB::insert("INSERT INTO [dbo].[ZODIACO]  ([SIGNO])  VALUES   ('ARIES') ");
DB::insert("INSERT INTO [dbo].[ZODIACO]  ([SIGNO])  VALUES   ('TAURO') ");
DB::insert("INSERT INTO [dbo].[ZODIACO]  ([SIGNO])  VALUES   ('GEMINIS') ");
DB::insert("INSERT INTO [dbo].[ZODIACO]  ([SIGNO])  VALUES   ('CANCER') ");
DB::insert("INSERT INTO [dbo].[ZODIACO]  ([SIGNO])  VALUES   ('LEO') ");
DB::insert("INSERT INTO [dbo].[ZODIACO]  ([SIGNO])  VALUES   ('VIRGO') ");
DB::insert("INSERT INTO [dbo].[ZODIACO]  ([SIGNO])  VALUES   ('LIBRA') ");

echo '[RELIGION]:<hr>(CATOLICO,CRISTIANO)';
DB::insert("INSERT INTO [dbo].[RELIGION]  ([RELIGION])  VALUES   ('CATOLICO') ");
DB::insert("INSERT INTO [dbo].[RELIGION]  ([RELIGION])  VALUES   ('CRISTIANO') ");

echo '[MASCOTA]:<hr>(PERRO,GATO)';
DB::insert("INSERT INTO [dbo].[MASCOTA]  ([MASCOTA])  VALUES   ('PERRO') ");
DB::insert("INSERT INTO [dbo].[MASCOTA]  ([MASCOTA])  VALUES   ('GATO') ");

echo '[COLOR_CABELLO]:<hr>(NEGRO,BLANCO)';
DB::insert("INSERT INTO [dbo].[COLOR_CABELLO]  ([COLOR_CABELLO])  VALUES   ('BLANCO') ");
DB::insert("INSERT INTO [dbo].[COLOR_CABELLO]  ([COLOR_CABELLO])  VALUES   ('NEGRO') ");

echo '[ID_MUDARSE]:<hr>(SI,no)';
DB::insert("INSERT INTO [dbo].[MUDARSE]  ([MUDARSE])  VALUES   ('SI') ");
DB::insert("INSERT INTO [dbo].[MUDARSE]  ([MUDARSE])  VALUES   ('NO') ");

echo '[ID_TIPO_RELACION]:<hr>(AMIGOS,NOVIO)';
DB::insert("INSERT INTO [dbo].[TIPO_RELACION]  ([TIPO_RELACION])  VALUES   ('AMIGOS') ");
DB::insert("INSERT INTO [dbo].[TIPO_RELACION]  ([TIPO_RELACION])  VALUES   ('NOVIOS') ");

echo '[ID_MAS_HIJOS]:<hr>(0,1)';
DB::insert("INSERT INTO [dbo].[MAS_HIJOS]  ([MAS_HIJOS])  VALUES   ('0') ");
DB::insert("INSERT INTO [dbo].[MAS_HIJOS]  ([MAS_HIJOS])  VALUES   ('1') ");

echo '[ID_HIJOS]:<hr>(0,1)';
DB::insert("INSERT INTO [dbo].[HIJOS]  ([HIJOS])  VALUES   ('0') ");
DB::insert("INSERT INTO [dbo].[HIJOS]  ([HIJOS])  VALUES   ('1') ");

echo '[ID_ESTADO_CIVIL]:<hr>(SOLTERO,CASADO)';
DB::insert("INSERT INTO [dbo].[ESTADO_CIVIL]  ([ESTADO_CIVIL])  VALUES   ('SOLTERO') ");
DB::insert("INSERT INTO [dbo].[ESTADO_CIVIL]  ([ESTADO_CIVIL])  VALUES   ('CASADO') ");

echo '[ID_FUMA]:<hr>(SI,no)';
DB::insert("INSERT INTO [dbo].[FUMA]  ([FUMA])  VALUES   ('SI') ");
DB::insert("INSERT INTO [dbo].[FUMA]  ([FUMA])  VALUES   ('NO') ");

echo '[ID_BEBE]:<hr>(SI=1,no=0)';
DB::insert("INSERT INTO [dbo].[BEBE]  ([BEBE])  VALUES   (0) ");
DB::insert("INSERT INTO [dbo].[BEBE]  ([BEBE])  VALUES   (1) ");

echo '[ID_BELLO_FACIAL]:<hr>(SI,no)';
DB::insert("INSERT INTO [dbo].[BELLO_FACIAL]  ([BELLO_FACIAL])  VALUES   ('SI') ");
DB::insert("INSERT INTO [dbo].[BELLO_FACIAL]  ([BELLO_FACIAL])  VALUES   ('NO') ");

echo '[ID_ETNIA]:<hr>(NINGUNA,OTRA)';
DB::insert("INSERT INTO [dbo].[ETNIA]  ([ETNIA])  VALUES   ('NINGUNA') ");
DB::insert("INSERT INTO [dbo].[ETNIA]  ([ETNIA])  VALUES   ('OTRA') ");

echo '[ID_TIPO_CUERPO]:<hr>(FLACO,GORDO)';
DB::insert("INSERT INTO [dbo].[TIPO_CUERPO]  ([TIPO_CUERPO])  VALUES   ('FLACO') ");
DB::insert("INSERT INTO [dbo].[TIPO_CUERPO]  ([TIPO_CUERPO])  VALUES   ('GORDO') ");

echo '[ID_PESO]:<hr>(MENOR A 50KG,MAYOR A 51KG)';
DB::insert("INSERT INTO [dbo].[PESO]  ([PESO])  VALUES   ('MENOR A 50KG') ");
DB::insert("INSERT INTO [dbo].[PESO]  ([PESO])  VALUES   ('MAYOR A 51KG') ");

echo '[ID_ESTATURA]:<hr>(MENOR A 70MT,MAYOR A 71MT)';
DB::insert("INSERT INTO [dbo].[ESTATURA]  ([ESTATURA])  VALUES   ('MENOR A 70MT') ");
DB::insert("INSERT INTO [dbo].[ESTATURA]  ([ESTATURA])  VALUES   ('MAYOR A 71MT') ");

echo '[ID_VISION]:<hr>(GAFAS,NO GAFAS)';
DB::insert("INSERT INTO [dbo].[VISION]  ([VISION])  VALUES   ('GAFAS') ");
DB::insert("INSERT INTO [dbo].[VISION]  ([VISION])  VALUES   ('NO GAFAS') ");

echo '[ID_COLOR_OJOS]:<hr>(AZULES,NEGROS)';
DB::insert("INSERT INTO [dbo].[COLOR_OJOS]  ([COLOR_OJOS])  VALUES   ('AZULES') ");
DB::insert("INSERT INTO [dbo].[COLOR_OJOS]  ([COLOR_OJOS])  VALUES   ('NEGROS') ");

echo '[ID_TIPO_CABELLO]:<hr>(AZULES_LISO,NEGROS_LISO)';
DB::insert("INSERT INTO [dbo].[TIPO_CABELLO]  ([TIPO_CABELLO])  VALUES   ('AZULES_LISO') ");
DB::insert("INSERT INTO [dbo].[TIPO_CABELLO]  ([TIPO_CABELLO])  VALUES   ('NEGROS_LISO') ");

echo '[ID_LONGITUD_CABELLO]:<hr>(LARGO,CORTO)';
DB::insert("INSERT INTO [dbo].[LONGITUD_CABELLO]  ([LONGITUD_CABELLO])  VALUES   ('LARGO') ");
DB::insert("INSERT INTO [dbo].[LONGITUD_CABELLO]  ([LONGITUD_CABELLO])  VALUES   ('CORTO') ");

echo '[PAIS]:<hr>(COLOMBIA,CHILE)';
DB::insert("INSERT INTO [dbo].[PAIS]  ([PAIS])  VALUES   ('COLOMBIA') ");
DB::insert("INSERT INTO [dbo].[PAIS]  ([PAIS])  VALUES   ('CHILE') ");

echo '[CIUDAD]:<hr>(BOGOTA,SANTIAGO)';
DB::insert("INSERT INTO [dbo].[CIUDAD]  ([CIUDAD],[ID_PAIS])  VALUES   ('BOGOTA',1) ");
DB::insert("INSERT INTO [dbo].[CIUDAD]  ([CIUDAD],[ID_PAIS])  VALUES   ('SANTIAGO',2) ");













?>