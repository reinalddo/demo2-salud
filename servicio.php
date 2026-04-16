<?php
include 'includes/funciones.php';

$serviciosPagina = load_json_data('servicios/pagina.json', []);
$serviciosItems = load_json_collection('servicios/items');
$requestedSlug = trim($_GET['slug'] ?? '');
$currentService = null;

if ($requestedSlug === '') {
    $currentService = $serviciosItems[0] ?? null;
} else {
    foreach ($serviciosItems as $item) {
        if (($item['slug'] ?? '') === $requestedSlug) {
            $currentService = $item;
            break;
        }
    }
}

if ($currentService === null && $requestedSlug !== '') {
    http_response_code(404);
}

$currentListing = $currentService['listado'] ?? [];
$currentDetail = $currentService['detalle'] ?? [];
$currentSidebar = $currentService['sidebar'] ?? [];
$defaultDetail = $serviciosPagina['detalle'] ?? [];
$specialist = $currentSidebar['especialista'] ?? ($defaultDetail['sidebar']['especialista'] ?? []);
$interestLinks = $currentSidebar['enlacesInteres'] ?? ($defaultDetail['sidebar']['enlacesInteres'] ?? []);
$notFoundTitle = $defaultDetail['noEncontrado']['titulo'] ?? 'Servicio no encontrado';
$notFoundText = $defaultDetail['noEncontrado']['texto'] ?? 'El servicio solicitado no existe o fue removido del catalogo JSON.';

$detailColors = $currentDetail['colores'] ?? [];
$bannerBackground = $detailColors['bannerFondo'] ?? 'var(--primary)';
$bannerText = $detailColors['bannerTexto'] ?? '#ffffff';
$buttonBackground = $detailColors['botonFondo'] ?? 'var(--primary)';
$buttonText = $detailColors['botonTexto'] ?? '#ffffff';
$cardBackground = $detailColors['cardFondo'] ?? '#ffffff';

$pageTitle = (($currentDetail['pageTitle'] ?? ($currentListing['titulo'] ?? 'Servicio')) . ' - Demo Médico');
include 'includes/header.php';
?>

<main>
    <section class="detail-banner py-3" style="background:<?php echo htmlspecialchars($bannerBackground, ENT_QUOTES, 'UTF-8'); ?>;">
        <div class="container">
            <div class="detail-banner-box rounded-2 px-3 py-2">
                <h2 class="mb-0" style="color:<?php echo htmlspecialchars($bannerText, ENT_QUOTES, 'UTF-8'); ?>;"><?php echo htmlspecialchars($currentDetail['bannerTitulo'] ?? ($currentListing['titulo'] ?? 'SERVICIO'), ENT_QUOTES, 'UTF-8'); ?></h2>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <?php if ($currentService === null): ?>
            <div class="row">
                <div class="col-12">
                    <div class="card p-4">
                        <h4 class="fw-bold mb-3"><?php echo htmlspecialchars($notFoundTitle, ENT_QUOTES, 'UTF-8'); ?></h4>
                        <p class="text-muted mb-0"><?php echo htmlspecialchars($notFoundText, ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-12 col-lg-9">
                    <img src="<?php echo htmlspecialchars(asset_url($currentDetail['urlimagen'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($currentDetail['alt'] ?? ($currentDetail['titulo'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid rounded-3 mb-3">

                    <div class="card p-3 mb-3" style="background:<?php echo htmlspecialchars($cardBackground, ENT_QUOTES, 'UTF-8'); ?>;">
                        <h4 class="fw-bold"><?php echo htmlspecialchars($currentDetail['titulo'] ?? ($currentListing['titulo'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></h4>
                        <?php foreach (($currentDetail['parrafos'] ?? []) as $paragraph): ?>
                            <p class="text-muted"><?php echo htmlspecialchars($paragraph, ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endforeach; ?>

                        <div class="accordion" id="serviceAccordion">
                            <?php foreach (($currentDetail['faqs'] ?? []) as $index => $faq): ?>
                                <?php
                                    $faqId = 'faq' . ($index + 1);
                                    $collapseId = 'collapse' . ($index + 1);
                                ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="<?php echo $faqId; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapseId; ?>" aria-expanded="false" aria-controls="<?php echo $collapseId; ?>">
                                            <?php echo htmlspecialchars($faq['pregunta'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                                        </button>
                                    </h2>
                                    <div id="<?php echo $collapseId; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $faqId; ?>" data-bs-parent="#serviceAccordion">
                                        <div class="accordion-body">
                                            <?php echo htmlspecialchars($faq['respuesta'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <?php if (!empty($currentDetail['descarga']['href'])): ?>
                            <a href="<?php echo htmlspecialchars(project_url($currentDetail['descarga']['href']), ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($currentDetail['descarga']['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($currentDetail['descarga']['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-teal mt-3" style="background:<?php echo htmlspecialchars($buttonBackground, ENT_QUOTES, 'UTF-8'); ?>;color:<?php echo htmlspecialchars($buttonText, ENT_QUOTES, 'UTF-8'); ?>;"><?php echo htmlspecialchars($currentDetail['descarga']['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-12 col-lg-3 right-sidebar">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h6 class="card-title"><?php echo htmlspecialchars($specialist['titulo'] ?? 'Buscar a un especialista', ENT_QUOTES, 'UTF-8'); ?></h6>
                            <img src="<?php echo htmlspecialchars(asset_url($specialist['urlimagen'] ?? 'assets/img/doctor/doctor1.jpg'), ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid rounded-2 mb-2" alt="<?php echo htmlspecialchars($specialist['alt'] ?? 'especialista', ENT_QUOTES, 'UTF-8'); ?>">
                            <?php if (!empty($specialist['boton']['href'])): ?>
                                <a href="<?php echo htmlspecialchars(project_url($specialist['boton']['href']), ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($specialist['boton']['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($specialist['boton']['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-teal btn-sm" style="background:<?php echo htmlspecialchars($buttonBackground, ENT_QUOTES, 'UTF-8'); ?>;color:<?php echo htmlspecialchars($buttonText, ENT_QUOTES, 'UTF-8'); ?>;"><?php echo htmlspecialchars($specialist['boton']['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6 class="fw-bold"><?php echo htmlspecialchars($interestLinks['titulo'] ?? 'Enlaces de Interes', ENT_QUOTES, 'UTF-8'); ?></h6>
                            <ul class="list-unstyled small mt-3">
                                <?php foreach (($interestLinks['items'] ?? []) as $link): ?>
                                    <li class="d-flex mb-2">
                                        <img src="<?php echo htmlspecialchars(asset_url($link['urlimagen'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>" class="me-2 rounded-2" style="width:48px;height:48px;object-fit:cover;">
                                        <div><a href="<?php echo htmlspecialchars(project_url($link['href'] ?? '#'), ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($link['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($link['titulo'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a><br><small class="text-muted"><?php echo htmlspecialchars($link['fecha'] ?? '', ENT_QUOTES, 'UTF-8'); ?></small></div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

</main>

<?php include 'includes/footer.php'; ?>
