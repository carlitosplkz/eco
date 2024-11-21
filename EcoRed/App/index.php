<?php
// Configuración inicial
define("BASE_PATH", __DIR__ . "/Vista/");

// Función para cargar vistas
function cargarVista($vista) {
    $archivoVista = BASE_PATH . $vista . ".php";
    if (file_exists($archivoVista)) {
        include $archivoVista;
    } else {
        include BASE_PATH . "404.php"; // Vista por defecto si no existe
    }
}


$vista = isset($_GET['page']) ? $_GET['page'] : 'inicio'; // Vista predeterminada: 'inicio'

// Cargar la vista solicitada
cargarVista($vista);
?>
