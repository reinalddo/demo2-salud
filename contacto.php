<?php
$pageTitle = 'Contacto - Demo Médico';
include 'includes/header.php';
?>

<main>
    <section class="detail-banner py-3">
        <div class="container">
            <div class="detail-banner-box rounded-2 px-3 py-2">
                <h2 class="mb-0 text-white">PRIMER CONTACTO CON NOSOTROS</h2>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-7">
                    <h3 class="mb-3">Envíanos un Mensaje</h3>
                    <div class="card p-4">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="fullName" class="form-label fw-bold">Nombre Completo</label>
                                <input type="text" id="fullName" class="form-control" placeholder="Ej: Juan Pérez" required>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label fw-bold">Asunto / Servicio</label>
                                <select id="subject" class="form-select">
                                    <option>Consulta General</option>
                                    <option>Consulta especializada</option>
                                    <option>Quimioterapia</option>
                                    <option>Radioterapia</option>
                                    <option>Diagnóstico por imagen</option>
                                    <option>Laboratorio clínico</option>
                                    <option>Genética oncológica</option>
                                    <option>Rehabilitación</option>
                                    <option>Apoyo psicológico</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold">Mensaje</label>
                                <textarea id="message" class="form-control" placeholder="Hola, quisiera agendar una cita para..." rows="6" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-whatsapp btn-lg">
                                    <i class="bi bi-whatsapp me-2"></i> Enviar por WhatsApp
                                </button>
                            </div>
                            <div class="form-text mt-2">Te responderemos inmediatamente a tu chat.</div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="fw-bold">Contacto</h6>
                            <p class="mb-1">Tel: <a href="tel:+<?php echo $doctor_phone; ?>"><?php echo $doctor_phone_display; ?></a></p>
                            <p class="mb-1">Correo: <a href="mailto:informes@ipor.pe">informes@ipor.pe</a></p>
                            <p class="mb-1">Horario: Lunes a sábado: 7:00 a.m. - 8:00 p.m.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body p-0">
                            <!-- Demo OpenStreetMap embed -->
                            <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-77.0385%2C-12.097%2C-77.0335%2C-12.093&layer=mapnik&marker=-12.095%2C-77.036" style="border:0"></iframe>
                            <div style="text-align:right"><small><a href="https://www.openstreetmap.org/?mlat=-12.095&amp;mlon=-77.036#map=18/-12.095/-77.036" target="_blank">Ver mapa más grande</a></small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(e){
        e.preventDefault();
        var name = document.getElementById('fullName').value.trim();
        var subject = document.getElementById('subject').value.trim();
        var message = document.getElementById('message').value.trim();
        if(!name || !message){
            alert('Por favor completa tu nombre y el mensaje.');
            return;
        }

        var full = 'Hola, soy ' + name + '\n\n' +
                   'Asunto/Servicio: ' + subject + '\n\n' +
                   'Mensaje:\n' + message + '\n\n' +
                   'Enviado desde: ' + window.location.href;

        var phone = '<?php echo $doctor_phone; ?>';
        var url = 'https://wa.me/' + phone + '?text=' + encodeURIComponent(full);
        window.open(url, '_blank');
    });
    </script>

</main>

<?php include 'includes/footer.php'; ?>
