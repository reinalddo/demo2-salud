<?php
$pageTitle = 'Inicio - Demo Médico';
include 'includes/header.php';
?>

<main>
    <!-- HERO (mobile-first) -->
    <section class="hero bg-primary text-white d-flex align-items-center" style="min-height:60vh; background-image: url('assets/img/hero/hero1.jpg'); background-size:cover; background-position:center;">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-6" data-aos="fade-up">
                    <h1 class="h2 fw-bold">Consulta Privada con <?php echo $doctor_name; ?></h1>
                    <p class="lead">Especialista en <?php echo $doctor_specialty; ?>. Atención personalizada, exámenes de última generación y teleconsulta.</p>
                    <div class="d-flex gap-2">
                        <a href="#servicios" class="btn btn-light btn-lg text-primary rounded-pill">Ver Servicios</a>
                        <a href="<?php echo wa_link('Hola, quiero agendar una cita con ' . $doctor_name); ?>" target="_blank" class="btn btn-outline-light btn-lg rounded-pill">Agendar Cita</a>
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
                    <img src="assets/img/doctor/doctor1.jpg" class="img-fluid rounded-3" alt="<?php echo $doctor_name; ?>">
                </div>
                <div class="col-12 col-md-7" data-aos="fade-left">
                    <h2 class="fw-bold">Sobre <?php echo $doctor_name; ?></h2>
                    <p class="text-muted">Profesional con amplia experiencia en atención clínica y prevención. Brinda planes personalizados y seguimiento continuo a sus pacientes.</p>
                    <ul>
                        <li>Evaluaciones completas</li>
                        <li>Planes preventivos y control de factores de riesgo</li>
                        <li>Teleconsulta y seguimientos digitales</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- (Servicios moved below in place of Testimonios) -->

    <!-- PORQUE ELEGIRNOS -->
    <section id="porque" class="why-us">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">¿Por qué elegirnos?</h2>
            <div class="row g-4">
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="why-card p-3">
                        <h5 class="fw-bold text-uppercase">Especialistas en Oncología</h5>
                        <p>Nuestro Staff Médico cuenta con amplia trayectoria y formación continua para brindar atención de calidad.</p>
                        <img src="assets/img/services/service1.jpg" class="why-img mt-3" alt="Oncología">
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="why-card p-3">
                        <h5 class="fw-bold text-uppercase">Tecnología de vanguardia</h5>
                        <p>Contamos con equipamiento moderno para diagnósticos precisos y tratamientos efectivos.</p>
                        <img src="assets/img/services/service2.jpg" class="why-img mt-3" alt="Tecnología">
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="why-card p-3">
                        <h5 class="fw-bold text-uppercase">Atención integral</h5>
                        <p>Ofrecemos servicios complementarios: farmacoterapia, nutrición, telemedicina y atención domiciliaria.</p>
                        <img src="assets/img/services/service3.jpg" class="why-img mt-3" alt="Atención integral">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS (moved here replacing Testimonios) -->
    <section id="servicios" class="py-4 bg-light">
        <div class="container">
            <h3 class="fw-bold mb-4" data-aos="fade-up">Servicios</h3>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in">
                    <div class="card hover-lift">
                        <img src="assets/img/services/service1.jpg" class="card-img-top" alt="Consulta">
                        <div class="card-body">
                            <h5 class="card-title">Consulta Privada</h5>
                            <p class="card-text text-muted">Atención individualizada y diagnóstico integral.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card hover-lift">
                        <img src="assets/img/services/service2.jpg" class="card-img-top" alt="Ecografía">
                        <div class="card-body">
                            <h5 class="card-title">Ecografía y Pruebas</h5>
                            <p class="card-text text-muted">Estudios rápidos con interpretación profesional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card hover-lift">
                        <img src="assets/img/services/service3.jpg" class="card-img-top" alt="Teleconsulta">
                        <div class="card-body">
                            <h5 class="card-title">Teleconsulta</h5>
                            <p class="card-text text-muted">Consultas online para seguimiento y conveniencia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
