<?php extend('layouts/backend_layout'); ?>

<?php section('content'); ?>

<div id="about-page" class="container backend-page py-3">
    <div id="about" class="col-lg-8 offset-lg-2">

        <div class="text-center my-5">
            <h3>Clinic Scheduler</h3>
            <h6 class="text-primary">Clinic Appointment Management</h6>
        </div>

        <p class="mb-5">
            Clinic Scheduler is an appointment management system designed for clinics and their staff.
        </p>

        <div class="card mb-5">
            <div class="card-header">
                <h5 class="fw-light mb-0">Clinic Scheduler Version</h5>
            </div>
            <div class="card-body">
                <strong>0.1.5</strong>
            </div>
        </div>

        <h4 class="fw-light mb-3">Open Source &amp; License Information</h4>

        <div class="card mb-5">
            <div class="card-body">
                <p>
                    Clinic Scheduler is based in part on Easy!Appointments, an open-source appointment scheduler
                    developed by Alex Tselegidis. This version includes modifications and clinic-specific features.
                </p>

                <p>
                    Easy!Appointments is licensed under the GNU General Public License version 3 (GPL-3.0).
                    The applicable copyright and license notices are retained in the source code and LICENSE file.
                </p>

                <p class="mb-4">
                    Easy!Appointments &copy; Alex Tselegidis.
                </p>

                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <a class="btn btn-outline-secondary d-block"
                           href="https://easyappointments.org" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Easy!Appointments Project
                        </a>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <a class="btn btn-outline-secondary d-block"
                           href="https://www.gnu.org/licenses/gpl-3.0.en.html" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-external-link-alt me-2"></i>
                            GNU GPL v3 License
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-muted small">
            Easy!Appointments version <?= e(config('version')) ?> is used as the underlying open-source application.
        </p>
    </div>
</div>

<?php end_section('content'); ?>
