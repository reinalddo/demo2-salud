<?php
$pageTitle = 'Braquiterapia HDR - Demo Médico';
include 'includes/header.php';
?>

<main>
    <section class="detail-banner py-3">
        <div class="container">
            <div class="detail-banner-box rounded-2 px-3 py-2">
                <h2 class="mb-0 text-white">BRAQUITERAPIA HDR</h2>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-lg-9">
                <img src="assets/img/services/service1.jpg" alt="Braquiterapia HDR" class="img-fluid rounded-3 mb-3">

                <div class="card p-3 mb-3">
                    <h4 class="fw-bold">Braquiterapia HDR</h4>
                    <p class="text-muted">La braquiterapia (también conocida como radioterapia interna o terapia de implantes) es una técnica que permite administrar radiación directamente en el tumor con gran precisión, minimizando la exposición de tejidos sanos.</p>
                    <p class="text-muted">Nuestros especialistas evalúan la indicación y planificación con imágenes por tomografía y equipos de alta precisión. En la mayoría de los casos, el tratamiento se realiza en sesiones cortas y con mínimas molestias para el paciente.</p>

                    <div class="accordion" id="serviceAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    ¿Qué es la Braquiterapia HDR?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="faqOne" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    Explicación breve y demostrativa sobre en qué consiste la braquiterapia HDR y cómo se aplica en nuestro centro.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Para qué sirve la Braquiterapia HDR en el tratamiento del cáncer?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    Información resumida sobre indicaciones y beneficios clínicos.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Efectos secundarios y cuidados
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree" data-bs-parent="#serviceAccordion">
                                <div class="accordion-body">
                                    Breve guía de efectos posibles y recomendaciones generales postratamiento.
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-teal mt-3">DESCARGAR TRÍPTICO - BRAQUITERAPIA HDR</a>
                </div>
            </div>

            <div class="col-12 col-lg-3 right-sidebar">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <h6 class="card-title">Buscar a un especialista</h6>
                        <img src="assets/img/doctor/doctor1.jpg" class="img-fluid rounded-2 mb-2" alt="especialista">
                        <a href="contacto.php" class="btn btn-teal btn-sm">ESTAMOS PARA AYUDARTE</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h6 class="fw-bold">Enlaces de Interés</h6>
                        <ul class="list-unstyled small mt-3">
                            <li class="d-flex mb-2">
                                <img src="assets/img/services/service1.jpg" class="me-2 rounded-2" style="width:48px;height:48px;object-fit:cover;">
                                <div><a href="#">Día Mundial de la Salud</a><br><small class="text-muted">7 de abril de 2026</small></div>
                            </li>
                            <li class="d-flex mb-2">
                                <img src="assets/img/services/service2.jpg" class="me-2 rounded-2" style="width:48px;height:48px;object-fit:cover;">
                                <div><a href="#">Día de la Cirugía Peruana</a><br><small class="text-muted">5 de abril de 2026</small></div>
                            </li>
                            <li class="d-flex mb-2">
                                <img src="assets/img/services/service3.jpg" class="me-2 rounded-2" style="width:48px;height:48px;object-fit:cover;">
                                <div><a href="#">Control del Cáncer de Colon</a><br><small class="text-muted">31 de marzo de 2026</small></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>
