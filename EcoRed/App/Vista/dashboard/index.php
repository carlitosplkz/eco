<?php
session_start();

// Verificar si el usuario tiene permisos
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header('Location: /'); // Redirige al inicio si no tiene permisos
    exit;
}

// Incluir partes reutilizables
require_once './partials/header.php';
require_once './partials/sidebar.php';
?>

<div class="main-content">
    <h1>Bienvenido al Dashboard</h1>
    <p>Gestiona Eco-Red desde esta sección administrativa.</p>
</div>

<?php
require_once './partials/footer.php';
?>
