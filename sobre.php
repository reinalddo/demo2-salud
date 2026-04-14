<?php
$pageTitle = 'Sobre - Demo Médico';
include 'includes/header.php';
?>

<main>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5" data-aos="fade-right">
                    <img src="assets/img/doctor/doctor1.jpg" class="img-fluid rounded-3" alt="<?php echo $doctor_name; ?>">
                </div>
                <div class="col-12 col-md-7" data-aos="fade-left">
                    <h1 class="fw-bold">Sobre <?php echo $doctor_name; ?></h1>
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
</main>

<?php include 'includes/footer.php'; ?>
