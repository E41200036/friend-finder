<?php
if ($_SESSION['account']['role_id'] != 2) {
    echo "
        <script>window.history.back()</script>
    ";
}
?>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
            <a href="/" class="d-flex my-nav-brand justify-content-center align-items-center col-md mx-2 mb-md-0 text-dark text-decoration-none">
                <div class="d-flex align-items-center mb-5">
                    <img src="<?= BASE_URL ?>/img/logo2.png" width="20" height="20" alt="">
                    <h6 class="fw-bold my-auto ms-2">Friend Finder</h6>
                </div>
            </a>
            <div class="position-sticky pt-3">
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center mb-4 px-3 mx-2 mt-2 mb-1 text-dark">
                    <strong class="ms-2">ADMIN</strong>
                    <a class="link-dark" href="#" aria-label="Add a new report">
                        <span data-feather="chevron-down"></span>
                    </a>
                </h6>
                <ul class="nav mx-2 flex-column">
                    <li class="nav-item">
                        <a class="nav-link <?= (App::$page == 'dashboard') ? 'active text-white' : '' ?>" aria-current="page" href="<?= BASE_URL ?>/dashboard">
                            <div class="d-flex align-items-center">
                                <span data-feather="home" class="me-2"></span>
                                Dashboard
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (App::$page == 'event') ? 'active text-white' : '' ?>" href="<?= BASE_URL ?>/event">
                            <div class="d-flex align-items-center">
                                <span data-feather="calendar" class="me-2"></span>
                                Events
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (App::$page == 'place') ? 'active text-white' : '' ?>" href="<?= BASE_URL ?>/place">
                            <div class="d-flex align-items-center">
                                <span data-feather="map-pin" class="me-2"></span>
                                Place
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (App::$page == 'account') ? 'active text-white' : '' ?>" href="<?= BASE_URL ?>/account">
                            <div class="d-flex align-items-center">
                                <span data-feather="user" class="me-2"></span>
                                Account
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <div class="d-flex align-items-center">
                                <span data-feather="chevron-right" class="me-2"></span>
                                Sign out
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="logoutModalLabel">Attention!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure to logout?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <a href="<?= BASE_URL ?>/auth/logout" class="btn btn-primary">Yes</a>
                    </div>
                </div>
            </div>
        </div>