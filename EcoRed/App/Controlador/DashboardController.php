<?php
class DashboardController {
    public function index() {
        require_once '../app/Views/dashboard/index.php';
    }

    public function users() {
        require_once '../app/Views/dashboard/users.php';
    }

    public function requests() {
        require_once '../app/Views/dashboard/requests.php';
    }

    public function news() {
        require_once '../app/Views/dashboard/news.php';
    }
}
