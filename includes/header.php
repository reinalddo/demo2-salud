<?php include __DIR__ . '/funciones.php'; ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : $doctor_name; ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Theme CSS (mobile-first) -->
    <link href="css/estilos.css" rel="stylesheet">

    <style>
        /* Small helpers used only for prototyping */
        :root{ --primary:#0d95c8; --accent:#17a2b8; --muted:#6c757d; }
    </style>
</head>
<body>

<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">
            <i class="bi bi-person-badge me-2"></i><?php echo $doctor_name; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="sobre.php">Objetivos</a></li>
                <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                <li class="nav-item ms-2"><a class="btn btn-whatsapp rounded-pill px-3" href="<?php echo wa_link(); ?>" target="_blank"><i class="bi bi-whatsapp"></i> Cita</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- spacer to avoid content hidden under fixed navbar on mobile -->
<div class="nav-spacer" style="height:64px;"></div>
