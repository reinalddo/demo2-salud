<?php
include_once __DIR__ . '/funciones.php';

$themeConfig = load_json_data('theme/config.json', []);
$themeColors = $themeConfig['colores'] ?? [];
$headerConfig = load_json_data('header/config.json', []);

$headerLogo = $headerConfig['logo'] ?? [];
$headerMenu = $headerConfig['menu'] ?? [];
$headerWhatsapp = $headerConfig['numerowhatsapp'] ?? [];
$headerCta = $headerConfig['botonCita'] ?? [];

$headerFavicon = $headerConfig['favicon'] ?? 'assets/img/favicon/stethoscope.svg';
$headerLogoIcon = $headerLogo['icono'] ?? 'bi bi-person-badge';
$headerLogoText = $headerLogo['texto'] ?? $doctor_name;
$headerLogoHref = $headerLogo['href'] ?? './';
$headerLogoTarget = $headerLogo['target'] ?? '_self';
$headerLogoTitle = $headerLogo['title'] ?? 'Ir al inicio';
$headerCtaHref = $headerCta['href'] ?? ($headerWhatsapp['href'] ?? wa_link());
$headerCtaTarget = $headerCta['target'] ?? '_blank';
$headerCtaText = $headerCta['texto'] ?? 'Cita';
$headerCtaTitle = $headerCta['title'] ?? 'Abrir WhatsApp para solicitar una cita';

$themePrimary = htmlspecialchars($themeColors['primary'] ?? '#0d95c8', ENT_QUOTES, 'UTF-8');
$themeAccent = htmlspecialchars($themeColors['accent'] ?? '#17a2b8', ENT_QUOTES, 'UTF-8');
$themeMuted = htmlspecialchars($themeColors['muted'] ?? '#6c757d', ENT_QUOTES, 'UTF-8');
$themeWhatsapp = htmlspecialchars($themeColors['whatsapp'] ?? '#25D366', ENT_QUOTES, 'UTF-8');
$themeTextDark = htmlspecialchars($themeColors['textDark'] ?? '#21313a', ENT_QUOTES, 'UTF-8');
$themeTextLight = htmlspecialchars($themeColors['textLight'] ?? '#ffffff', ENT_QUOTES, 'UTF-8');
$themeSurface = htmlspecialchars($themeColors['surface'] ?? '#f7f9fb', ENT_QUOTES, 'UTF-8');
$themeHeroOverlay = htmlspecialchars($themeColors['heroOverlay'] ?? 'rgba(0,0,0,0.35)', ENT_QUOTES, 'UTF-8');
?>
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
    <link rel="icon" href="<?php echo htmlspecialchars($headerFavicon, ENT_QUOTES, 'UTF-8'); ?>" type="image/svg+xml">

    <style>
        :root{
            --primary:<?php echo $themePrimary; ?>;
            --accent:<?php echo $themeAccent; ?>;
            --muted:<?php echo $themeMuted; ?>;
            --whatsapp:<?php echo $themeWhatsapp; ?>;
            --text-dark:<?php echo $themeTextDark; ?>;
            --text-light:<?php echo $themeTextLight; ?>;
            --surface:<?php echo $themeSurface; ?>;
            --hero-overlay:<?php echo $themeHeroOverlay; ?>;
        }
    </style>
</head>
<body>

<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo htmlspecialchars($headerLogoHref, ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($headerLogoTarget, ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($headerLogoTitle, ENT_QUOTES, 'UTF-8'); ?>">
            <i class="<?php echo htmlspecialchars($headerLogoIcon, ENT_QUOTES, 'UTF-8'); ?> me-2"></i><?php echo htmlspecialchars($headerLogoText, ENT_QUOTES, 'UTF-8'); ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <?php foreach ($headerMenu as $item): ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo htmlspecialchars($item['href'] ?? './', ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($item['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($item['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($item['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a></li>
                <?php endforeach; ?>
                <li class="nav-item ms-2"><a class="btn btn-whatsapp rounded-pill px-3" href="<?php echo htmlspecialchars($headerCtaHref, ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($headerCtaTarget, ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($headerCtaTitle, ENT_QUOTES, 'UTF-8'); ?>"><i class="bi bi-whatsapp"></i> <?php echo htmlspecialchars($headerCtaText, ENT_QUOTES, 'UTF-8'); ?></a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- spacer to avoid content hidden under fixed navbar on mobile -->
<div class="nav-spacer" style="height:64px;"></div>
