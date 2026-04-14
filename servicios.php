<?php
$pageTitle = 'Servicios - Demo Médico';
include 'includes/header.php';
?>

<main>
    <section class="py-5 bg-light">
        <div class="container">
            <h1 class="fw-bold mb-4">Servicios</h1>
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
