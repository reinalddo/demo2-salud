    <footer class="bg-white text-muted py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold">Contacto</h5>
                    <p class="mb-1"><?php echo $doctor_address; ?></p>
                    <p class="mb-0">Tel: <a href="tel:+<?php echo $doctor_phone; ?>"><?php echo $doctor_phone_display; ?></a></p>
                </div>
                <div class="col-md-6 text-md-end">
                    <small>&copy; <?php echo date('Y'); ?> <?php echo $doctor_name; ?>. Demo para presentación a doctores.</small>
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
    </script>

</body>
</html>
