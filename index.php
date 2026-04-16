<?php
$pageTitle = 'Inicio - Demo Médico';
include 'includes/header.php';

$inicioHeader = load_json_data('inicio/header.json', []);
$inicioQuienSoy = load_json_data('inicio/quiensoy.json', []);
$inicioPorqueElegirnos = load_json_data('inicio/porqueelegirnos.json', []);
$inicioServicios = load_json_data('inicio/servicios.json', []);

$heroImage = $inicioHeader['urlimagen'] ?? 'assets/img/hero/hero1.jpg';
$heroTitle = $inicioHeader['titulo'] ?? ('Consulta Privada con ' . $doctor_name);
$heroText = $inicioHeader['texto'] ?? ('Especialista en ' . $doctor_specialty . '. Atención personalizada, exámenes de última generación y teleconsulta.');
$heroButton1 = $inicioHeader['boton1'] ?? ['href' => '#servicios', 'target' => '_self', 'texto' => 'Ver Servicios', 'title' => 'Ir a la sección de servicios'];
$heroButton2 = $inicioHeader['boton2'] ?? ['href' => wa_link('Hola, quiero agendar una cita con ' . $doctor_name), 'target' => '_blank', 'texto' => 'Agendar Cita', 'title' => 'Agendar una cita por WhatsApp'];

$aboutImage = $inicioQuienSoy['urlimagen'] ?? 'assets/img/doctor/doctor1.jpg';
$aboutTitle = $inicioQuienSoy['titulo'] ?? ('Sobre ' . $doctor_name);
$aboutText = $inicioQuienSoy['texto'] ?? 'Profesional con amplia experiencia en atención clínica y prevención. Brinda planes personalizados y seguimiento continuo a sus pacientes.';
$aboutItems = $inicioQuienSoy['items'] ?? [];

$whyTitle = $inicioPorqueElegirnos['titulo'] ?? '¿Por qué elegirnos?';
$whyCards = $inicioPorqueElegirnos['tarjetas'] ?? [];

$servicesTitle = $inicioServicios['titulo'] ?? 'Servicios';
$servicesItems = $inicioServicios['items'] ?? [];
?>

<main>
    <!-- HERO (mobile-first) -->
    <section class="hero bg-primary text-white d-flex align-items-center" style="min-height:60vh; background-image: url('<?php echo htmlspecialchars(asset_url($heroImage), ENT_QUOTES, 'UTF-8'); ?>'); background-size:cover; background-position:center;">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-6" data-aos="fade-up">
                    <h1 class="h2 fw-bold"><?php echo htmlspecialchars($heroTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
                    <p class="lead"><?php echo htmlspecialchars($heroText, ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="d-flex gap-2">
                        <a href="<?php echo htmlspecialchars(project_url($heroButton1['href'] ?? '#servicios'), ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($heroButton1['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($heroButton1['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-light btn-lg text-primary rounded-pill"><?php echo htmlspecialchars($heroButton1['texto'] ?? 'Ver Servicios', ENT_QUOTES, 'UTF-8'); ?></a>
                        <a href="<?php echo htmlspecialchars(project_url($heroButton2['href'] ?? '#'), ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($heroButton2['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($heroButton2['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-outline-light btn-lg rounded-pill"><?php echo htmlspecialchars($heroButton2['texto'] ?? 'Agendar Cita', ENT_QUOTES, 'UTF-8'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOBRE (About) -->
    <section id="sobre" class="py-4 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5" data-aos="fade-right">
                    <img src="<?php echo htmlspecialchars(asset_url($aboutImage), ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid rounded-3" alt="<?php echo htmlspecialchars($aboutTitle, ENT_QUOTES, 'UTF-8'); ?>">
                </div>
                <div class="col-12 col-md-7" data-aos="fade-left">
                    <h2 class="fw-bold"><?php echo htmlspecialchars($aboutTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p class="text-muted"><?php echo htmlspecialchars($aboutText, ENT_QUOTES, 'UTF-8'); ?></p>
                    <ul>
                        <?php foreach ($aboutItems as $item): ?>
                            <li><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- (Servicios moved below in place of Testimonios) -->

    <!-- PORQUE ELEGIRNOS -->
    <section id="porque" class="why-us">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up"><?php echo htmlspecialchars($whyTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
            <div class="row g-4">
                <?php foreach ($whyCards as $index => $card): ?>
                    <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="<?php echo (int) (($index + 1) * 50); ?>">
                        <div class="why-card p-3">
                            <h5 class="fw-bold text-uppercase"><?php echo htmlspecialchars($card['titulo'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h5>
                            <p><?php echo htmlspecialchars($card['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                            <img src="<?php echo htmlspecialchars(asset_url($card['urlimagen'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>" class="why-img mt-3" alt="<?php echo htmlspecialchars($card['alt'] ?? ($card['titulo'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SERVICIOS (moved here replacing Testimonios) -->
    <section id="servicios" class="py-4 bg-light">
        <div class="container">
            <h3 class="fw-bold mb-4" data-aos="fade-up"><?php echo htmlspecialchars($servicesTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
            <div class="row g-3">
                <?php foreach ($servicesItems as $index => $service): ?>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="<?php echo (int) ($index * 100); ?>">
                        <div class="card hover-lift">
                            <img src="<?php echo htmlspecialchars(asset_url($service['urlimagen'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($service['titulo'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($service['titulo'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h5>
                                <p class="card-text text-muted"><?php echo htmlspecialchars($service['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                                <?php if (!empty($service['enlace']['href'])): ?>
                                    <a href="<?php echo htmlspecialchars(project_url($service['enlace']['href']), ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($service['enlace']['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($service['enlace']['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-teal btn-sm"><?php echo htmlspecialchars($service['enlace']['texto'] ?? 'Ver servicio', ENT_QUOTES, 'UTF-8'); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
