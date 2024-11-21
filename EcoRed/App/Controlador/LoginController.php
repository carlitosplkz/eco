<?php
// Controlador para manejar la lógica del Dashboard
class DashboardController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login.php');  // Si no está autenticado, redirigir a login
            exit();
        }

        // Obtener el rol del usuario desde la sesión
        $role = $_SESSION['role']; 

        // Redirigir según el rol
        if ($role == 'admin') {
            // Llamar al método que obtendrá los datos específicos para los administradores
            $this->adminDashboard();
        } elseif ($role == 'voluntario') {
            // Llamar al método que obtendrá los datos para los voluntarios
            $this->voluntarioDashboard();
        } else {
            // Llamar al método que mostrará el dashboard para un usuario normal
            $this->usuarioDashboard();
        }
    }

    private function adminDashboard() {
        // Aquí puedes cargar datos específicos para el administrador
        require_once('views/dashboard_admin.php'); // Vista específica para el administrador
    }

    private function voluntarioDashboard() {
        // Aquí puedes cargar datos específicos para el voluntario
        require_once('views/dashboard_voluntario.php'); // Vista específica para el voluntario
    }

    private function usuarioDashboard() {
        // Aquí puedes cargar datos específicos para el usuario normal
        require_once('views/dashboard_usuario.php'); // Vista específica para el usuario normal
    }
}
?>
