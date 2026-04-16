<?php
$pageTitle = 'Servicios - Demo Médico';
include 'includes/header.php';
?>

<main>
    <section class="py-4 bg-white">
        <div class="container">
            <div class="search-banner p-3 rounded-3 d-flex flex-column flex-md-row align-items-center justify-content-between">
                <h3 class="mb-2 mb-md-0">Busca un servicio:</h3>
                <form class="w-100 w-md-50 ms-md-3" role="search" action="#">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Buscar por nombre o especialidad..." aria-label="Buscar servicios">
                            <button class="btn btn-light" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    

    <section class="py-5 service-list bg-light">
        <div class="container">
            <h1 class="fw-bold mb-4">Servicios</h1>
            <div class="row g-4 service-grid">
                <!-- Card 1 -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="50">
                    <div class="service-card hover-lift">
                        <div class="card-img-wrap position-relative">
                            <img src="assets/img/services/service1.jpg" alt="Consulta especializada">
                            <div class="overlay"></div>
                            <div class="card-info p-3 text-white">
                                <h5 class="mb-1">Consulta especializada</h5>
                                <p class="small mb-0">Evaluación y plan de tratamiento personalizado.</p>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-3">
                            <a href="servicio" class="btn btn-teal btn-sm">Más información</a>
                        </div>
                        <a href="servicio" class="stretched-link" aria-label="Ver servicio"></a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="service-card hover-lift">
                        <div class="card-img-wrap position-relative">
                            <img src="assets/img/services/service2.jpg" alt="Quimioterapia">
                            <div class="overlay"></div>
                            <div class="card-info p-3 text-white">
                                <h5 class="mb-1">Quimioterapia</h5>
                                <p class="small mb-0">Protocolos seguros y monitorización continua.</p>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-3">
                            <a href="servicio" class="btn btn-teal btn-sm">Más información</a>
                        </div>
                        <a href="servicio" class="stretched-link" aria-label="Ver servicio"></a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="150">
                    <div class="service-card hover-lift">
                        <div class="card-img-wrap position-relative">
                            <img src="assets/img/services/service3.jpg" alt="Radioterapia">
                            <div class="overlay"></div>
                            <div class="card-info p-3 text-white">
                                <h5 class="mb-1">Radioterapia</h5>
                                <p class="small mb-0">Terapias conformadas con planificación avanzada.</p>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-3">
                            <a href="servicio" class="btn btn-teal btn-sm">Más información</a>
                        </div>
                        <a href="servicio" class="stretched-link" aria-label="Ver servicio"></a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-card hover-lift">
                        <div class="card-img-wrap position-relative">
                            <img src="assets/img/doctor/doctor1.jpg" alt="Diagnóstico por Imagen">
                            <div class="overlay"></div>
                            <div class="card-info p-3 text-white">
                                <h5 class="mb-1">Diagnóstico por imagen</h5>
                                <p class="small mb-0">Imágenes con tecnología de última generación.</p>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-3">
                            <a href="servicio" class="btn btn-teal btn-sm">Más información</a>
                        </div>
                        <a href="servicio" class="stretched-link" aria-label="Ver servicio"></a>
                    </div>
                </div>

                <!-- Additional cards (duplicate images for demo) -->
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="250">
                    <div class="service-card hover-lift">
                        <div class="card-img-wrap position-relative">
                            <img src="assets/img/services/service1.jpg" alt="Laboratorio">
                            <div class="overlay"></div>
                            <div class="card-info p-3 text-white">
                                <h5 class="mb-1">Laboratorio clínico</h5>
                                <p class="small mb-0">Análisis especializados y rápidos.</p>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-3">
                            <a href="servicio" class="btn btn-teal btn-sm">Más información</a>
                        </div>
                        <a href="servicio" class="stretched-link" aria-label="Ver servicio"></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-card hover-lift">
                        <div class="card-img-wrap position-relative">
                            <img src="assets/img/services/service2.jpg" alt="Genética">
                            <div class="overlay"></div>
                            <div class="card-info p-3 text-white">
                                <h5 class="mb-1">Genética oncológica</h5>
                                <p class="small mb-0">Consejería y estudios genéticos.</p>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-3">
                            <a href="servicio" class="btn btn-teal btn-sm">Más información</a>
                        </div>
                        <a href="servicio" class="stretched-link" aria-label="Ver servicio"></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="350">
                    <div class="service-card hover-lift">
                        <div class="card-img-wrap position-relative">
                            <img src="assets/img/services/service3.jpg" alt="Rehabilitación">
                            <div class="overlay"></div>
                            <div class="card-info p-3 text-white">
                                <h5 class="mb-1">Rehabilitación</h5>
                                <p class="small mb-0">Programas de recuperación física y terapia.</p>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-3">
                            <a href="servicio" class="btn btn-teal btn-sm">Más información</a>
                        </div>
                        <a href="servicio" class="stretched-link" aria-label="Ver servicio"></a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-card hover-lift">
                        <div class="card-img-wrap position-relative">
                            <img src="assets/img/doctor/doctor1.jpg" alt="Apoyo Psicológico">
                            <div class="overlay"></div>
                            <div class="card-info p-3 text-white">
                                <h5 class="mb-1">Apoyo psicológico</h5>
                                <p class="small mb-0">Acompañamiento emocional para pacientes y familias.</p>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-3">
                            <a href="servicio" class="btn btn-teal btn-sm">Más información</a>
                        </div>
                        <a href="servicio" class="stretched-link" aria-label="Ver servicio"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
