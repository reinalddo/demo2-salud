<?php
$pageTitle = 'Contacto - Demo Médico';
include 'includes/header.php';

$contactoHeader = load_json_data('contacto/header.json', []);
$contactoFormulario = load_json_data('contacto/formulario.json', []);
$contactoInformacion = load_json_data('contacto/informacion.json', []);
$contactoMapa = load_json_data('contacto/mapa.json', []);

$contactBannerTitle = $contactoHeader['titulo'] ?? 'PRIMER CONTACTO CON NOSOTROS';
$formTitle = $contactoFormulario['titulo'] ?? 'Envíanos un Mensaje';
$formFields = $contactoFormulario['campos'] ?? [];
$nameField = $formFields['nombre'] ?? ['id' => 'fullName', 'label' => 'Nombre Completo', 'placeholder' => 'Ej: Juan Pérez'];
$subjectField = $formFields['asunto'] ?? ['id' => 'subject', 'label' => 'Asunto / Servicio', 'opciones' => []];
$messageField = $formFields['mensaje'] ?? ['id' => 'message', 'label' => 'Mensaje', 'placeholder' => 'Hola, quisiera agendar una cita para...', 'rows' => 6];
$formButton = $contactoFormulario['boton'] ?? ['texto' => 'Enviar por WhatsApp', 'title' => 'Enviar mensaje por WhatsApp'];
$formHelp = $contactoFormulario['ayuda'] ?? 'Te responderemos inmediatamente a tu chat.';
$formValidationMessage = $contactoFormulario['mensajes']['validacion'] ?? 'Por favor completa tu nombre y el mensaje.';

$infoTitle = $contactoInformacion['titulo'] ?? 'Contacto';
$infoPhone = $contactoInformacion['telefono'] ?? ['texto' => $doctor_phone_display, 'href' => 'tel:+' . $doctor_phone, 'title' => 'Llamar al consultorio'];
$infoEmail = $contactoInformacion['correo'] ?? ['texto' => 'informes@ipor.pe', 'href' => 'mailto:informes@ipor.pe', 'title' => 'Enviar correo'];
$infoSchedule = $contactoInformacion['horario'] ?? 'Lunes a sábado: 7:00 a.m. - 8:00 p.m.';

$mapFrame = $contactoMapa['iframe'] ?? [];
$mapLink = $contactoMapa['enlace'] ?? [];
$mapSrc = $mapFrame['src'] ?? 'https://www.openstreetmap.org/export/embed.html?bbox=-77.0385%2C-12.097%2C-77.0335%2C-12.093&layer=mapnik&marker=-12.095%2C-77.036';
$mapWidth = $mapFrame['width'] ?? '100%';
$mapHeight = $mapFrame['height'] ?? '250';
$mapTitle = $mapFrame['title'] ?? 'Mapa de ubicación';
?>

<main>
    <section class="detail-banner py-3">
        <div class="container">
            <div class="detail-banner-box rounded-2 px-3 py-2">
                <h2 class="mb-0 text-white"><?php echo htmlspecialchars($contactBannerTitle, ENT_QUOTES, 'UTF-8'); ?></h2>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-lg-7">
                    <h3 class="mb-3"><?php echo htmlspecialchars($formTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
                    <div class="card p-4">
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="<?php echo htmlspecialchars($nameField['id'] ?? 'fullName', ENT_QUOTES, 'UTF-8'); ?>" class="form-label fw-bold"><?php echo htmlspecialchars($nameField['label'] ?? 'Nombre Completo', ENT_QUOTES, 'UTF-8'); ?></label>
                                <input type="text" id="<?php echo htmlspecialchars($nameField['id'] ?? 'fullName', ENT_QUOTES, 'UTF-8'); ?>" class="form-control" placeholder="<?php echo htmlspecialchars($nameField['placeholder'] ?? 'Ej: Juan Pérez', ENT_QUOTES, 'UTF-8'); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="<?php echo htmlspecialchars($subjectField['id'] ?? 'subject', ENT_QUOTES, 'UTF-8'); ?>" class="form-label fw-bold"><?php echo htmlspecialchars($subjectField['label'] ?? 'Asunto / Servicio', ENT_QUOTES, 'UTF-8'); ?></label>
                                <select id="<?php echo htmlspecialchars($subjectField['id'] ?? 'subject', ENT_QUOTES, 'UTF-8'); ?>" class="form-select">
                                    <?php foreach (($subjectField['opciones'] ?? []) as $option): ?>
                                        <option><?php echo htmlspecialchars($option, ENT_QUOTES, 'UTF-8'); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="<?php echo htmlspecialchars($messageField['id'] ?? 'message', ENT_QUOTES, 'UTF-8'); ?>" class="form-label fw-bold"><?php echo htmlspecialchars($messageField['label'] ?? 'Mensaje', ENT_QUOTES, 'UTF-8'); ?></label>
                                <textarea id="<?php echo htmlspecialchars($messageField['id'] ?? 'message', ENT_QUOTES, 'UTF-8'); ?>" class="form-control" placeholder="<?php echo htmlspecialchars($messageField['placeholder'] ?? 'Hola, quisiera agendar una cita para...', ENT_QUOTES, 'UTF-8'); ?>" rows="<?php echo (int) ($messageField['rows'] ?? 6); ?>" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-whatsapp btn-lg" title="<?php echo htmlspecialchars($formButton['title'] ?? 'Enviar mensaje por WhatsApp', ENT_QUOTES, 'UTF-8'); ?>">
                                    <i class="bi bi-whatsapp me-2"></i> <?php echo htmlspecialchars($formButton['texto'] ?? 'Enviar por WhatsApp', ENT_QUOTES, 'UTF-8'); ?>
                                </button>
                            </div>
                            <div class="form-text mt-2"><?php echo htmlspecialchars($formHelp, ENT_QUOTES, 'UTF-8'); ?></div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="fw-bold"><?php echo htmlspecialchars($infoTitle, ENT_QUOTES, 'UTF-8'); ?></h6>
                            <p class="mb-1">Tel: <a href="<?php echo htmlspecialchars(project_url($infoPhone['href'] ?? '#'), ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($infoPhone['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($infoPhone['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a></p>
                            <p class="mb-1">Correo: <a href="<?php echo htmlspecialchars(project_url($infoEmail['href'] ?? '#'), ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($infoEmail['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($infoEmail['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a></p>
                            <p class="mb-1">Horario: <?php echo htmlspecialchars($infoSchedule, ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body p-0">
                            <!-- Demo OpenStreetMap embed -->
                            <iframe width="<?php echo htmlspecialchars($mapWidth, ENT_QUOTES, 'UTF-8'); ?>" height="<?php echo htmlspecialchars($mapHeight, ENT_QUOTES, 'UTF-8'); ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo htmlspecialchars($mapSrc, ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($mapTitle, ENT_QUOTES, 'UTF-8'); ?>" style="border:0"></iframe>
                            <div style="text-align:right"><small><a href="<?php echo htmlspecialchars(project_url($mapLink['href'] ?? '#'), ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($mapLink['target'] ?? '_blank', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($mapLink['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($mapLink['texto'] ?? 'Ver mapa más grande', ENT_QUOTES, 'UTF-8'); ?></a></small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.getElementById('contactForm').addEventListener('submit', function(e){
        e.preventDefault();
        var name = document.getElementById('<?php echo htmlspecialchars($nameField['id'] ?? 'fullName', ENT_QUOTES, 'UTF-8'); ?>').value.trim();
        var subject = document.getElementById('<?php echo htmlspecialchars($subjectField['id'] ?? 'subject', ENT_QUOTES, 'UTF-8'); ?>').value.trim();
        var message = document.getElementById('<?php echo htmlspecialchars($messageField['id'] ?? 'message', ENT_QUOTES, 'UTF-8'); ?>').value.trim();
        if(!name || !message){
            alert('<?php echo htmlspecialchars($formValidationMessage, ENT_QUOTES, 'UTF-8'); ?>');
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
