<?php
$pageTitle = 'Objetivos - Demo Médico';
include 'includes/header.php';

$objetivosHeader = load_json_data('objetivos/header.json', []);
$objetivosMisionVision = load_json_data('objetivos/misionvision.json', []);
$objetivosFortalezas = load_json_data('objetivos/fortalezas.json', []);
$objetivosSocios = load_json_data('objetivos/socios.json', []);
$objetivosAfiliaciones = load_json_data('objetivos/afiliaciones.json', []);
$objetivosVideo = load_json_data('objetivos/video.json', []);

$headerTitle = $objetivosHeader['titulo'] ?? 'CLÍNICA ONCOLÓGICA';
$misionVisionTabs = $objetivosMisionVision['tabs'] ?? [];
$misionVisionImage = $objetivosMisionVision['imagen']['url'] ?? 'assets/img/services/service2.jpg';
$misionVisionAlt = $objetivosMisionVision['imagen']['alt'] ?? 'Instalaciones';
$fortalezasTitle = $objetivosFortalezas['titulo'] ?? 'Nuestras fortalezas';
$fortalezasItems = $objetivosFortalezas['items'] ?? [];
$sociosTitle = $objetivosSocios['titulo'] ?? 'Nuestros socios estratégicos';
$sociosItems = $objetivosSocios['items'] ?? [];
$afiliacionesTitle = $objetivosAfiliaciones['titulo'] ?? 'Afiliaciones y certificaciones';
$afiliacionesItems = $objetivosAfiliaciones['items'] ?? [];
$videoTitle = $objetivosVideo['titulo'] ?? 'Tratamiento Integral Oncológico';
$videoSrc = $objetivosVideo['iframe']['src'] ?? 'https://www.youtube.com/embed/ScMzIvxBSi4';
$videoFrameTitle = $objetivosVideo['iframe']['title'] ?? 'video';
?>

<main>
    <!-- Page banner -->
    <section class="page-banner">
        <div class="container text-center">
            <div class="banner-box">
                <h2><?php echo htmlspecialchars($headerTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
            </div>
        </div>
    </section>

    <!-- Mission / Vision with image -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6" data-aos="fade-right">
                    <div class="card p-3 shadow-sm">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <?php foreach ($misionVisionTabs as $tab): ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link<?php echo !empty($tab['activa']) ? ' active' : ''; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo htmlspecialchars($tab['id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($tab['label'] ?? '', ENT_QUOTES, 'UTF-8'); ?></button>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($misionVisionTabs as $tab): ?>
                                <div class="tab-pane fade<?php echo !empty($tab['activa']) ? ' show active' : ''; ?>" id="<?php echo htmlspecialchars($tab['id'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                                    <h5 class="fw-bold"><?php echo htmlspecialchars($tab['titulo'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h5>
                                    <p class="text-muted"><?php echo htmlspecialchars($tab['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                                    <?php if (!empty($tab['boton']['href'])): ?>
                                        <a href="<?php echo htmlspecialchars(project_url($tab['boton']['href']), ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($tab['boton']['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($tab['boton']['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-primary mt-2"><?php echo htmlspecialchars($tab['boton']['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" data-aos="fade-left">
                    <img src="<?php echo htmlspecialchars(asset_url($misionVisionImage), ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid rounded-3 shadow-sm" alt="<?php echo htmlspecialchars($misionVisionAlt, ENT_QUOTES, 'UTF-8'); ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- Strengths -->
    <section class="strengths">
        <div class="container">
            <h3 class="text-center fw-bold mb-4"><?php echo htmlspecialchars($fortalezasTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4">
                <?php foreach ($fortalezasItems as $index => $item): ?>
                    <div class="col" data-aos="fade-up" data-aos-delay="<?php echo (int) (($index + 1) * 50); ?>">
                        <div class="strength-card p-3">
                            <i class="<?php echo htmlspecialchars($item['icono'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></i>
                            <h6 class="mt-2"><?php echo htmlspecialchars($item['titulo'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h6>
                            <p class="small text-muted"><?php echo htmlspecialchars($item['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Partners / Affiliations -->
    <section class="partners bg-white">
        <div class="container">
            <h3 class="text-center fw-bold mb-4"><?php echo htmlspecialchars($sociosTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
            <div class="row g-3 align-items-center justify-content-center">
                <?php foreach ($sociosItems as $index => $item): ?>
                    <div class="col-6 col-md-3 col-lg-2 text-center" data-aos="zoom-in" data-aos-delay="<?php echo (int) (($index + 1) * 50); ?>"><img class="partner-logo" src="<?php echo htmlspecialchars(asset_url($item['urlimagen'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($item['alt'] ?? 'socio', ENT_QUOTES, 'UTF-8'); ?>"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="affiliations bg-light">
        <div class="container">
            <h3 class="text-center fw-bold mb-4"><?php echo htmlspecialchars($afiliacionesTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3 aff-grid">
                <?php foreach ($afiliacionesItems as $index => $item): ?>
                    <div class="col" data-aos="zoom-in" data-aos-delay="<?php echo (int) (($index + 1) * 50); ?>"><div class="aff-item p-3"><img src="<?php echo htmlspecialchars(asset_url($item['urlimagen'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($item['alt'] ?? 'cert', ENT_QUOTES, 'UTF-8'); ?>"></div></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Video -->
    <section class="video-section bg-white">
        <div class="container">
            <h3 class="text-center fw-bold mb-4"><?php echo htmlspecialchars($videoTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="ratio ratio-16x9">
                        <iframe src="<?php echo htmlspecialchars($videoSrc, ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($videoFrameTitle, ENT_QUOTES, 'UTF-8'); ?>" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
