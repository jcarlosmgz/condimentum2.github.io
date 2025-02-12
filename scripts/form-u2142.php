<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.1.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de WidgetsLibrary::cotizacionForm',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_reCAPTCHA2_private_key' => 'Clave privada de reCAPTCHA 2.0 no válida.',
		'invalid_reCAPTCHA2_server_response' => 'Respuesta de servidor de reCAPTCHA 2.0 no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'invalid_form_config' => 'El campo \'%s\' contiene una configuración no válida.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'jcarlosmgz@gmail.com',
		'to' => 'jcarlosmgz@gmail.com'
	),
	'fields' => array(
		'custom_U2143' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Nombre',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Nombre\' es obligatorio.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Email\' es obligatorio.',
				'format' => 'El campo \'Email\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U2158' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'No. Teléfono',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'No. Teléfono\' es obligatorio.'
			)
		),
		'custom_U2178' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Fecha del Evento',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Fecha del Evento\' es obligatorio.'
			)
		),
		'custom_U2162' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Lugar del evento',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Lugar del evento\' es obligatorio.'
			)
		),
		'custom_U2154' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'No. de invitados',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'No. de invitados\' es obligatorio.'
			)
		),
		'custom_U2170' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Tipo de evento',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Tipo de evento\' es obligatorio.'
			)
		),
		'custom_U2148' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Presupuesto a manejar',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Presupuesto a manejar\' es obligatorio.'
			)
		),
		'custom_U2174' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Detalles extras',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
