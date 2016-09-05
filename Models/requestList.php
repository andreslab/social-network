<?php 
//Datos de un usuario en home que no esta loggeado o no tiene cuenta de toda la base de datos para SessionOutHome
define("CARRERA_SOH","SELECT * FROM carrera");
define("CARRERA_DOCENTE_SOH","SELECT * FROM carrera_docente");
define("DOCENTE_SOH","SELECT * FROM docente");
define("FOTO_SOH","SELECT * FROM foto");
define("GRUPO_SOH","SELECT * FROM grupo");
define("INTEGRANTES_GRUPO_SOH","SELECT * FROM integrantes_grupo");
define("MEDIA_SOH","SELECT * FROM media");
define("PUBLICACION_SOH","SELECT * FROM publicacion");
define("USUARIO_SOH","SELECT * FROM usuario");



//Datos de un usuario en home que está loggeado de datos para SessionInHome
//PENDIENTE ,SE LO DEJARA COMO EL SessionOutHome
define("CARRERA_SIH","SELECT * FROM carrera");
define("CARRERA_DOCENTE_SIH","SELECT * FROM carrera_docente");
define("DOCENTE_SIH","SELECT * FROM docente");
define("FOTO_SIH","SELECT * FROM foto");
define("GRUPO_SIH","SELECT * FROM grupo");
define("INTEGRANTES_GRUPO_SIH","SELECT * FROM integrantes_grupo");
define("MEDIA_SIH","SELECT * FROM media");
define("PUBLICACION_SIH","SELECT * FROM publicacion");
define("USUARIO_SIH","SELECT * FROM usuario");



//Datos de un usuario en su perfil que está loggeado de datos para SessionInAccount
define("SESION","SELECT * FROM sesion"); //datos de sesion iniciada, smp será un solo valor

define("CARRERA_SIA","SELECT * FROM carrera"); //si
define("CARRERA_DOCENTE_SIA","SELECT * FROM carrera_docente"); //no
define("DOCENTE_SIA","SELECT * FROM docente"); //no
define("FOTO_SIA","SELECT * FROM foto JOIN sesion ON foto.codigo_usuario = sesion.codigo_usuario"); //si
define("GRUPO_SIA","SELECT * FROM grupo JOIN integrantes_grupo ON grupo.codigo_grupo = integrantes_grupo.codigo_grupo JOIN sesion ON integrantes_grupo.codigo_usuario =sesion.codigo_usuario"); //si
define("INTEGRANTES_GRUPO_SIA","SELECT * FROM integrantes_grupo"); //si
define("MEDIA_SIA","SELECT * FROM media"); // no (TEMPORALMENTE)
define("PUBLICACION_SIA","SELECT * FROM publicacion"); //no
define("USUARIO_SIA","SELECT * FROM usuario JOIN sesion ON usuario.correo_usuario = sesion.userMail"); // si
 
/*
//integrantes de un grupo
define("INTEGRANTES_GRUPO_SIA","SELECT * FROM integrantes_grupo JOIN sesion ON integrantes_grupo.codigo_usuario = sesion.codigo_usuario JOIN grupo ON integrantes_grupo.codigo_grupo = grupo.codigo_grupo");
*/

//Datos de otro usuario en su perfil desde un usuario loggeado o no loggeado que está loggeado de datos para SessionOtherUser
define("CARRERA_SOU","SELECT * FROM carrera"); //si
define("CARRERA_DOCENTE_SOU","SELECT * FROM carrera_docente"); //no
define("DOCENTE_SOU","SELECT * FROM docente"); //no
define("FOTO_SOU","SELECT * FROM foto WHERE codigo_usuario="); //si
define("GRUPO_SOU","SELECT * FROM grupo"); //si
define("INTEGRANTES_GRUPO_SOU","SELECT * FROM integrantes_grupo WHERE codigo_usuario="); //si
define("MEDIA_SOU","SELECT * FROM media"); //no (TEMPORALMENTE)
define("PUBLICACION_SOU","SELECT * FROM publicacion"); //no
define("USUARIO_SOU","SELECT * FROM usuario WHERE nombre_usuario="); //si
 ?>
 ?>


