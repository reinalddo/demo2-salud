<?php
$pageTitle = 'Servicios - Demo Médico';
include 'includes/header.php';

$serviciosPagina = load_json_data('servicios/pagina.json', []);
$serviciosItems = load_json_collection('servicios/items');
$searchConfig = $serviciosPagina['buscador'] ?? [];
$listConfig = $serviciosPagina['listado'] ?? [];
$searchQuery = trim($_GET['q'] ?? '');

if ($searchQuery !== '') {
    $serviciosItems = array_values(array_filter($serviciosItems, function ($item) use ($searchQuery) {
        $titulo = $item['listado']['titulo'] ?? '';
        $resumen = $item['listado']['resumen'] ?? '';
        return stripos($titulo, $searchQuery) !== false || stripos($resumen, $searchQuery) !== false;
    }));
}
?>

<main>
    <section class="py-4 bg-white">
        <div class="container">
            <div class="search-banner p-3 rounded-3 d-flex flex-column flex-md-row align-items-center justify-content-between">
                <h3 class="mb-2 mb-md-0"><?php echo htmlspecialchars($searchConfig['titulo'] ?? 'Busca un servicio:', ENT_QUOTES, 'UTF-8'); ?></h3>
                <form class="w-100 w-md-50 ms-md-3" role="search" action="servicios" method="get">
                    <div class="input-group">
                        <input type="search" name="q" value="<?php echo htmlspecialchars($searchQuery, ENT_QUOTES, 'UTF-8'); ?>" class="form-control" placeholder="<?php echo htmlspecialchars($searchConfig['placeholder'] ?? 'Buscar por nombre o especialidad...', ENT_QUOTES, 'UTF-8'); ?>" aria-label="Buscar servicios">
                            <button class="btn btn-light" type="submit" title="<?php echo htmlspecialchars($searchConfig['boton']['title'] ?? 'Buscar servicios', ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($searchConfig['boton']['texto'] ?? 'Buscar', ENT_QUOTES, 'UTF-8'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    

    <section class="py-5 service-list bg-light">
        <div class="container">
            <h1 class="fw-bold mb-4"><?php echo htmlspecialchars($listConfig['titulo'] ?? 'Servicios', ENT_QUOTES, 'UTF-8'); ?></h1>
            <div class="row g-4 service-grid">
                <?php foreach ($serviciosItems as $index => $item): ?>
                    <?php $listing = $item['listado'] ?? []; ?>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="<?php echo (int) (($index + 1) * 50); ?>">
                        <div class="service-card hover-lift">
                            <div class="card-img-wrap position-relative">
                                <img src="<?php echo htmlspecialchars($listing['urlimagen'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($listing['alt'] ?? ($listing['titulo'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
                                <div class="overlay"></div>
                                <div class="card-info p-3 text-white">
                                    <h5 class="mb-1"><?php echo htmlspecialchars($listing['titulo'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h5>
                                    <p class="small mb-0"><?php echo htmlspecialchars($listing['resumen'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </div>
                            <div class="card-footer text-center bg-white p-3">
                                <a href="servicios/<?php echo rawurlencode($item['slug'] ?? ''); ?>" class="btn btn-teal btn-sm"><?php echo htmlspecialchars($listing['enlaceTexto'] ?? 'Mas informacion', ENT_QUOTES, 'UTF-8'); ?></a>
                            </div>
                            <a href="servicios/<?php echo rawurlencode($item['slug'] ?? ''); ?>" class="stretched-link" aria-label="Ver servicio"></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if (empty($serviciosItems)): ?>
                <p class="text-muted mt-4 mb-0"><?php echo htmlspecialchars($listConfig['sinResultados'] ?? 'No se encontraron servicios con esa busqueda.', ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
