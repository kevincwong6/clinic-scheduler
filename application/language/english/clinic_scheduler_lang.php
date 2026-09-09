<?php defined('BASEPATH') or exit('No direct script access allowed');

// Clinic Scheduler terminology overrides.
// Keep upstream Easy!Appointments translation keys unchanged internally;
// only the text presented to users is customized here.

$lang['customer_information'] = 'Patient Information';
$lang['customer_details_title'] = 'Patient Details';
$lang['customer'] = 'Patient';
$lang['customers'] = 'Patients';
$lang['manage_customers_hint'] = 'Manage registered patients and view their appointment history.';
$lang['type_to_filter_customers'] = 'Type to filter patients.';
$lang['clear_fields_add_existing_customer_hint'] = 'Clear the fields and enter a new patient.';
$lang['pick_existing_customer_hint'] = 'Pick an existing patient.';
$lang['customer_saved'] = 'Patient saved successfully.';
$lang['customer_deleted'] = 'Patient deleted successfully.';
$lang['delete_customer'] = 'Delete Patient';
$lang['customer_notifications'] = 'Patient Notifications';
$lang['customer_notifications_hint'] = 'Defines whether the patient will receive email notifications whenever there is a schedule change to one of their appointments.';
$lang['require_phone_number_hint'] = 'When enabled, patients and users will need to enter the patient\'s phone number when booking an appointment.';
$lang['display_any_provider_hint'] = 'The booking page will get an additional option that allows patients to book without specifying a provider.';
$lang['disable_booking_hint'] = 'The booking page will be disabled for as long as this setting is active and patients will not be able to register new appointments.';
$lang['limit_customer_access'] = 'Limit Patient Access';
$lang['limit_customer_access_hint'] = 'If enabled, providers and secretaries will only be able to access patients they have an appointment with.';
$lang['customer_save'] = 'Patient Save';
$lang['customer_delete'] = 'Patient Delete';
$lang['webhooks_info'] = 'Webhooks enable you to send HTTP notifications to external web applications in response to various application events, such as the creation of an appointment or the removal of a patient.';
$lang['future_booking_limit_hint'] = 'Set the future limit in days patients can make appointments via the public booking page.';
$lang['customer_is_already_booked'] = 'This patient already has an appointment during the requested reservation period.';
$lang['display_add_to_google_calendar_info'] = 'Show the "Add to Google Calendar" button on the booking confirmation page, allowing patients to easily add their appointment to their personal Google Calendar.';
$lang['data_retention_days_hint'] = 'Set the number of days after which patient data will be automatically deleted. Set to 0 to disable automatic deletion.';
$lang['edit_working_plan_hint'] = 'Mark below the days and hours that your company will accept appointments. You will be able to adjust appointments in non-working hours but patients will not be able to book appointments by themselves in non-working periods. This working plan will be the default for every new provider record, but you will be able to change each provider\'s plan separately by editing their record. After that you can add break periods.';
$lang['book_advance_timeout_hint'] = 'Define the timeout (in minutes) before patients can book or re-arrange appointments with the company.';
$lang['about_app_info'] = 'Easy!Appointments is a highly customizable web application that allows your patients to book appointments with you via the web. Moreover, it provides the ability to sync your data with Google Calendar, so you can use them with other services.';
$lang['require_captcha_hint'] = 'When enabled, patients will have to type a randomly generated CAPTCHA string before booking or updating an appointment.';
