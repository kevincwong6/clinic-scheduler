<?php defined('BASEPATH') or exit('No direct script access allowed');

// Clinic Scheduler terminology overrides.
// Keep upstream Easy!Appointments translation keys unchanged internally.

$lang['customer_information'] = '患者信息';
$lang['customer_details_title'] = '患者详情';
$lang['customer'] = '患者';
$lang['customers'] = '患者';
$lang['manage_customers_hint'] = '管理已登记的患者并查看其预约记录。';
$lang['type_to_filter_customers'] = '输入内容以筛选患者。';
$lang['clear_fields_add_existing_customer_hint'] = '清空字段并输入新患者。';
$lang['pick_existing_customer_hint'] = '选择现有患者。';
$lang['customer_saved'] = '患者已成功保存。';
$lang['customer_deleted'] = '患者已成功删除。';
$lang['delete_customer'] = '删除患者';
$lang['customer_notifications'] = '患者通知';
$lang['customer_notifications_hint'] = '设置当预约发生变更时，患者是否接收电子邮件通知。';
$lang['require_phone_number_hint'] = '启用后，预约时需要输入患者的电话号码。';
$lang['display_any_provider_hint'] = '预约页面将增加一个选项，允许患者在不指定服务人员的情况下预约。';
$lang['disable_booking_hint'] = '启用后，预约页面将被停用，患者无法创建新的预约。';
$lang['limit_customer_access'] = '限制患者访问权限';
$lang['limit_customer_access_hint'] = '启用后，服务人员和秘书只能访问与其有预约关系的患者。';
$lang['customer_save'] = '保存患者';
$lang['customer_delete'] = '删除患者';
$lang['webhooks_info'] = 'Webhook 可在创建预约或删除患者等事件发生时，向外部应用程序发送 HTTP 通知。';
$lang['future_booking_limit_hint'] = '设置患者可通过公开预约页面提前预约的天数限制。';
$lang['customer_is_already_booked'] = '该患者在所选时间段内已有预约。';
$lang['display_add_to_google_calendar_info'] = '在预约确认页面显示“添加到 Google 日历”按钮，让患者可以方便地将预约添加到个人日历。';
$lang['data_retention_days_hint'] = '设置患者数据在多少天后自动删除。设置为 0 可停用自动删除。';
$lang['book_advance_timeout_hint'] = '设置患者在预约开始前多少分钟内不能新建或更改预约。';
$lang['require_captcha_hint'] = '启用后，患者在预约或更新预约前需要输入随机生成的验证码。';
