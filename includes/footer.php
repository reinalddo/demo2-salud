    <!-- Footer CTA -->
    <section class="footer-cta">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 text-md-start text-center mb-3 mb-md-0">
                    <h3 class="mb-1">Agenda una cita por WhatsApp</h3>
                    <p class="mb-0">Haz tu consulta rápidamente a través de nuestro chat de WhatsApp.</p>
                </div>
                <div class="col-md-4 text-md-end text-center">
                    <a href="<?php echo wa_link('Hola, quisiera agendar una cita.'); ?>" target="_blank" class="btn btn-lg btn-whatsapp"><i class="bi bi-whatsapp me-2"></i> Agenda una cita</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main footer -->
    <footer class="site-footer mt-0">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-4">
                    <div class="footer-logo mb-3"><?php echo $doctor_name; ?></div>
                    <p class="mb-2">Consultorio Privado · Atención personalizada y teleconsulta.</p>
                    <div class="social">
                        <a href="#" aria-label="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="youtube"><i class="bi bi-youtube"></i></a>
                        <a href="#" aria-label="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Enlaces principales</h6>
                    <ul class="list-unstyled">
                        <li><a href="./">Inicio</a></li>
                        <li><a href="objetivos">Objetivos</a></li>
                        <li><a href="servicios">Servicios</a></li>
                        <li><a href="contacto">Contáctenos</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold">Horario de atención</h6>
                    <ul class="list-unstyled">
                        <li>Lunes a Sábado: 7:00 a.m. - 8:00 p.m.</li>
                        <li>Valet parking gratuito</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold">Contacto</h6>
                    <p class="mb-1"><?php echo $doctor_address; ?></p>
                    <p class="mb-0">Tel: <a href="tel:+<?php echo $doctor_phone; ?>"><?php echo $doctor_phone_display; ?></a></p>
                </div>
            </div>

            <hr class="my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <small>&copy; <?php echo date('Y'); ?> <?php echo $doctor_name; ?>. Todos los derechos reservados.</small>
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
