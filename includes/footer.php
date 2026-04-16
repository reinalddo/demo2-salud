<?php
$footerConfig = load_json_data('footer/config.json', []);

$footerCta = $footerConfig['cta'] ?? [];
$footerBrand = $footerConfig['marca'] ?? [];
$footerLinks = $footerConfig['enlaces'] ?? [];
$footerSchedule = $footerConfig['horario'] ?? [];
$footerContact = $footerConfig['contacto'] ?? [];
$footerSocial = $footerConfig['social'] ?? [];

$footerCtaTitle = $footerCta['titulo'] ?? 'Agenda una cita por WhatsApp';
$footerCtaText = $footerCta['texto'] ?? 'Haz tu consulta rápidamente a través de nuestro chat de WhatsApp.';
$footerCtaButton = $footerCta['boton'] ?? [
    'href' => wa_link('Hola, quisiera agendar una cita.'),
    'target' => '_blank',
    'texto' => 'Agenda una cita',
    'title' => 'Agendar una cita por WhatsApp'
];
$footerBrandName = $footerBrand['nombre'] ?? $doctor_name;
$footerBrandDescription = $footerBrand['descripcion'] ?? 'Consultorio Privado · Atención personalizada y teleconsulta.';
$footerContactAddress = $footerContact['direccion'] ?? $doctor_address;
$footerPhone = $footerContact['telefono'] ?? [
    'texto' => $doctor_phone_display,
    'href' => 'tel:+' . $doctor_phone,
    'target' => '_self',
    'title' => 'Llamar al consultorio'
];
?>
    <!-- Footer CTA -->
    <section class="footer-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-md-start text-center mb-3 mb-md-0">
                    <h3 class="mb-1"><?php echo htmlspecialchars($footerCtaTitle, ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p class="mb-0"><?php echo htmlspecialchars($footerCtaText, ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
                <div class="col-md-4 text-md-end text-center">
                    <a href="<?php echo htmlspecialchars($footerCtaButton['href'] ?? '#', ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($footerCtaButton['target'] ?? '_blank', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($footerCtaButton['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-lg btn-whatsapp"><i class="bi bi-whatsapp me-2"></i> <?php echo htmlspecialchars($footerCtaButton['texto'] ?? 'Agenda una cita', ENT_QUOTES, 'UTF-8'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main footer -->
    <footer class="site-footer mt-0">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="footer-logo mb-3"><?php echo htmlspecialchars($footerBrandName, ENT_QUOTES, 'UTF-8'); ?></div>
                    <p class="mb-2"><?php echo htmlspecialchars($footerBrandDescription, ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="social">
                        <?php foreach ($footerSocial as $social): ?>
                            <a href="<?php echo htmlspecialchars($social['href'] ?? '#', ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($social['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($social['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" aria-label="<?php echo htmlspecialchars($social['red'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><i class="bi bi-<?php echo htmlspecialchars($social['red'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></i></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Enlaces principales</h6>
                    <ul class="list-unstyled">
                        <?php foreach ($footerLinks as $link): ?>
                            <li><a href="<?php echo htmlspecialchars($link['href'] ?? './', ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($link['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($link['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($link['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Horario de atención</h6>
                    <ul class="list-unstyled">
                        <?php foreach ($footerSchedule as $scheduleItem): ?>
                            <li><?php echo htmlspecialchars($scheduleItem, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold">Contacto</h6>
                    <p class="mb-1"><?php echo htmlspecialchars($footerContactAddress, ENT_QUOTES, 'UTF-8'); ?></p>
                    <p class="mb-0">Tel: <a href="<?php echo htmlspecialchars($footerPhone['href'] ?? '#', ENT_QUOTES, 'UTF-8'); ?>" target="<?php echo htmlspecialchars($footerPhone['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" title="<?php echo htmlspecialchars($footerPhone['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($footerPhone['texto'] ?? '', ENT_QUOTES, 'UTF-8'); ?></a></p>
                </div>
            </div>

            <hr class="my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <small>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($footerBrandName, ENT_QUOTES, 'UTF-8'); ?>. Todos los derechos reservados.</small>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/main.js"></script>

        <script>
            AOS.init({ duration: 900, once: true });
            // Ensure AOS recalculates positions after all resources load
            window.addEventListener('load', function(){ if (window.AOS && typeof window.AOS.refresh === 'function') window.AOS.refresh(); });
        </script>

</body>
</html>
