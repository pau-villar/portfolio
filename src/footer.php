<footer class="bg-dark-subtle text-center text-dark pt-5 pb-4 mt-auto border-top">
    <div class="container ">

        <?php if (!isset($pagina_actual) || $pagina_actual !== 'contacto'): ?>
            <!-- Contactar -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <h3 class="fw-bold">¿Tienes un proyecto en mente?</h3>
                    <p class="text-muted">Estoy disponible para prácticas, ofertas de empleo o proyectos. ¡Hablemos!</p>
                    <a href="src/contacto.php" class="btn btn-primary btn-lg px-4 shadow-sm">Contactar conmigo</a>
                </div>
            </div>

            <hr class="my-4 text-muted">
        <?php endif; ?>

        <!-- Créditos -->
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <small class="text-muted">&copy; <?php echo date('Y'); ?> Pau Villar Soria. Todos los derechos reservados.</small>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="https://github.com/pau-villar" target="_blank" class="text-muted small me-3 text-decoration-none">GitHub</a>
                <a href="https://www.linkedin.com/in/pau-villar-soria/" target="_blank" class="text-muted small text-decoration-none">LinkedIn</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>