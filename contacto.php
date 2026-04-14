<?php
$pageTitle = 'Contacto - Demo Médico';
include 'includes/header.php';
?>

<main>
    <section class="py-5 bg-white">
        <div class="container">
            <h1 class="fw-bold mb-4">Contacto</h1>
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>Dirección: <?php echo $doctor_address; ?></p>
                    <p>Teléfono: <a href="tel:+<?php echo $doctor_phone; ?>"><?php echo $doctor_phone_display; ?></a></p>
                    <p>Puedes escribirnos por WhatsApp o usar el formulario de contacto.</p>
                </div>
                <div class="col-12 col-md-6">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <button class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
