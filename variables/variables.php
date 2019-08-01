<?php

$nombre_inmobiliaria = "Inmobiliaria Santa Bárbara";
$logo = "img/logo.png";


//logo empresa
$logo_empresa = array(
	"src" => "img/logo.png",
	"alt" => "Logo Inmobiliaria Santa Bárbara"
); 

// boton pse
$pse = array(
	"link" => "",
	"src" => "images/pse.jpg",
	"alt" => "Pagos PSE"
);

// redes sociales, el cliente hasta ahora las va a crear, dejar indicado
$redes_sociales = array(
	"facebook" => array(
		"link" => "https://www.facebook.com/",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	),
	"twiter" => array(
		"link" => "https://www.twitter.com/",
		"icono" => "fab fa-twitter",
		"imagen" => "images/twitter.png"
	),
	"instagram" => array(
		"link" => "https://www.instagram.com/",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	),
	"youtube" => array(
		"link" => "https://www.youtube.com/",
		"icono" => "fab fa-youtube",
		"imagen" => "images/youtube.png"
	),
);

//datos de contacto
$datos_contacto = array(
	"direccion" => array(
		"direccion" => "Avenida Cra 15 No. 124-17 Oficinas 705 y 706 - Bogotá",
		"icono" => "fas fa-map-marker-alt",
	),
	"telefono_fijo_1" => array(
		"link"=> "+570312144700",
		"imprimir" => "PBX +57(1) 214 4700",
		"icono" => "fas fa-phone-alt",
	),
	"telefono_fijo_2" => array(
		"link"=> "+570312159771",
		"imprimir" => "PBX +57(1) 215 9771",
		"icono" => "fas fa-phone-alt",
	),
	"telefono_fijo_3" => array(
		"link"=> "+570312149761",
		"imprimir" => "PBX +57(1) 214 9761",
		"icono" => "fas fa-phone-alt",
	),
	"celular" => array(
		"link"=> "+573002667736 ",
		"imprimir" => "300 266 7736 ",
		"icono" => "fas fa-mobile-alt",
	),
	"whatsapp" => array(
		"link"=> "https://api.whatsapp.com/send?phone=573002667736&text=&source=&data=",
		"imprimir" => "300 266 7736 ",
		"icono" => "fab fa-whatsapp",
	),
	"correo" => array(
		"correo" => "santabarbaraltda@hotmail.com",
		"icono" => "far fa-envelope",
	),
	"horario" => array(
		"horario" => "",
		"icono" => "fas fa-calendar-alt",
	),	
);


//logos aliados


//iconos de servicios
$iconos_servicios = array(
	"arriendos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
);


//formularios asesuradoras
$formularios_aseguradoras = array(
	
);

// las imaganes no han sido proporcionadas por el cliente
$imagenes_slide_principal = array(
	0 => array(
		'imagen' => 'img/slide_1.jpg',
		'alt' => 'Imagenes del carousel'
	),
	1 => array(
		'imagen' => 'img/slide_2.jpg',
		'alt' => 'Imagenes del carousel'
	),
	2 => array(
		'imagen' => 'img/slide_3.jpg',
		'alt' => 'Imagenes del carousel'
	),
);

//revisar el documento enviado por el cliente para saber si hay títulos y subtitulos, viñetas, etc
$texto_quienes_somos = array(
	"titulo" => "Reseña Historica",
	"parrafos" => array(
		0 => "Somos una Empresa con más de 30 años de experiencia en el sector Inmobiliario, arrendando y vendiendo en Bogotá, nos caracterizamos por la honestidad y cumplimiento en nuestras actividades y por prestar de manera personalizada y cordial un servicio profesional a nuestros clientes.",		
		
	),
	"mision" => array(
		0 => "MISIÓN: Crear una nueva y buena imagen del sector inmobiliario ofreciendo un servicio amable, cercano, eficiente y honesto que haga felices a nuestros clientes.",
	),
	"vision" => array(
		0 => "VISIÓN: Ser la Empresa líder en el sector Inmobiliario en Bogotá a través de valores como la honestidad, cumplimiento e innovación.",
	),
	"slogan" => "Respaldo, Seguridad y confianza"
);

// las imaganes no han sido proporcionadas por el cliente
$imagenes = array(
	"banner_quienes_somos_home" => array(
		'imagen' => 'images/quienes_somos.jpg',
		'alt' => 'Imagen'
	),
	"banner_servicios_home" => array(
		'imagen' => 'img/servicios.jpg',
		'alt' => 'Imagen'
	),
	"banner_clientes_home" => array(
		"propietarios" => array(
			'imagen' => 'img/propietarios.jpg',
			'alt' => 'Imagen'
		),
		"arrendatarios" => array(
			'imagen' => 'img/arrendatarios.jpg',
			'alt' => 'Imagen'
		),
		"pagos_pse" => array(
			'imagen' => 'img/PAGO-PSE.png',
			'alt' => 'Imagen'
		),
	),
	"banner_noticas_home" => array(
		'imagen' => 'images/banner_noticias.png',
		'alt' => 'Imagen'
	),
	"banner_quienes_somos" => array(
		'imagen' => 'img/banner_quienes_somos.jpg',
		'alt' => 'Imagen banner quienes somos'
	),
	"banner_quienes_somos_slogan" => array(
		'imagen' => 'images/banner_slogan.jpg',
		'alt' => 'Imagen quienes somos'
	),
	"banner_mision_vision" => array(
		'imagen' => 'img/mision_vision.jpg',
		'alt' => 'Imagen mision'
	),
);

//revisar el documento enviado por el cliente para saber si hay títulos y subtitulos, viñetas, etc
$texto_servicios = array(
	"ventas" => array(
		"titulo" => "Ventas",
		"parrafo" => "Contamos con personal calificado que le brindará asesoría en todo el proceso de venta de su bien inmueble, haciendo que éste, sea rápido y seguro.",
	),
	"requisitos" => array(
		"titulo" => "Requisitos para consignar su inmueble en venta:",
		0 => "Certificado de tradición y libertad actualizado ( máximo dos meses )",
		1 => "Recibo del impuesto predial ( último )",
		2 => "Fotocopia de la Escritura.",
		3 => "Fotocopia de la cédula de ciudadanía del Propietario y/o Representante Legal.",
		4 => "Firma en la tarjeta de consignación del inmueble autorizando nuestra labor.",
	),
	"arriendos" => array(
		"titulo" => "Arriendos",
		"parrafo" => "Garantizamos la satisfacción total en el arriendo y administración de su bien Inmueble, Manejamos pólizas de seguros de arrendamiento con las principales Aseguradoras y Afianzadoras del mercado que cubre los pagos dejados de cancelar por el arrendatario, Brindamos asesoría para fijar canon de arrendamiento, Desarrollamos las mejores estrategias para promocionar su inmueble, contamos con personal altamente calificado para el arreglo y mantenimiento de su inmueble, gestionamos el pago de administraciones, servicios públicos, impuestos, valorizaciones, mantenimientos etc."
	)
);

?>