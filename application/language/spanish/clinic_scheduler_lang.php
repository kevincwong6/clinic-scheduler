<?php defined('BASEPATH') or exit('No direct script access allowed');

// Clinic Scheduler terminology overrides.
// Keep upstream Easy!Appointments translation keys unchanged internally.

$lang['customer_information'] = 'Información del paciente';
$lang['customer_details_title'] = 'Detalles del paciente';
$lang['customer'] = 'Paciente';
$lang['customers'] = 'Pacientes';
$lang['manage_customers_hint'] = 'Administre los pacientes registrados y consulte su historial de citas.';
$lang['type_to_filter_customers'] = 'Escriba para filtrar pacientes.';
$lang['clear_fields_add_existing_customer_hint'] = 'Limpie los campos e introduzca un nuevo paciente.';
$lang['pick_existing_customer_hint'] = 'Seleccione un paciente existente.';
$lang['customer_saved'] = 'Paciente guardado correctamente.';
$lang['customer_deleted'] = 'Paciente eliminado correctamente.';
$lang['delete_customer'] = 'Eliminar paciente';
$lang['customer_notifications'] = 'Notificaciones del paciente';
$lang['customer_notifications_hint'] = 'Define si el paciente recibirá notificaciones por correo electrónico cuando haya cambios en sus citas.';
$lang['require_phone_number_hint'] = 'Cuando está activado, será necesario introducir el número de teléfono del paciente al reservar una cita.';
$lang['display_any_provider_hint'] = 'La página de reservas incluirá una opción que permite a los pacientes reservar sin especificar un proveedor.';
$lang['disable_booking_hint'] = 'Mientras esta opción esté activa, la página de reservas estará deshabilitada y los pacientes no podrán registrar nuevas citas.';
$lang['limit_customer_access'] = 'Limitar acceso a pacientes';
$lang['limit_customer_access_hint'] = 'Si está activado, los proveedores y secretarios solo podrán acceder a los pacientes con quienes tengan una cita.';
$lang['customer_save'] = 'Guardar paciente';
$lang['customer_delete'] = 'Eliminar paciente';
$lang['webhooks_info'] = 'Los webhooks permiten enviar notificaciones HTTP a aplicaciones externas en respuesta a eventos, como la creación de una cita o la eliminación de un paciente.';
$lang['future_booking_limit_hint'] = 'Establezca el límite futuro, en días, para que los pacientes puedan reservar citas mediante la página pública.';
$lang['customer_is_already_booked'] = 'Este paciente ya tiene una cita durante el período solicitado.';
$lang['display_add_to_google_calendar_info'] = 'Muestra el botón “Añadir a Google Calendar” en la confirmación de la reserva para que los pacientes puedan añadir fácilmente la cita a su calendario personal.';
$lang['data_retention_days_hint'] = 'Establezca el número de días después de los cuales los datos del paciente se eliminarán automáticamente. Use 0 para desactivar la eliminación automática.';
$lang['book_advance_timeout_hint'] = 'Defina el tiempo, en minutos, antes de una cita durante el cual los pacientes ya no podrán reservarla ni modificarla.';
$lang['require_captcha_hint'] = 'Cuando está activado, los pacientes deberán introducir un CAPTCHA generado aleatoriamente antes de reservar o actualizar una cita.';
