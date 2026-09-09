<?php
$clinic_scheduler_version = '0.1.5';
/**
 * Local variables.
 *
 * @var string $user_display_name
 */
?>
<div id="footer" class="d-lg-flex justify-content-lg-start align-items-lg-center p-2 text-center text-lg-left mt-auto bg-body border-top" style="font-size: 13px;">
    <div class="mb-3 me-lg-5 mb-lg-0">
        <strong>Clinic Scheduler v<?= $clinic_scheduler_version ?></strong>
    </div>

    <div class="mb-3 me-lg-5 mb-lg-0">
        <a href="<?= site_url('about') ?>">About / License</a>
    </div>

    <div class="ms-lg-auto">
        <strong id="footer-user-display-name">
            <?= lang('hello') . ', ' . e($user_display_name) ?>!
        </strong>
    </div>
</div>
