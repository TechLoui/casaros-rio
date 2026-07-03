<section id="gallery" class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <?php render_section_heading('Áreas Comuns', 'Espaços cuidadosamente planejados para seu conforto'); ?>

        <div class="gallery-grid">
            <?php foreach ($site['common_areas'] as $item): ?>
                <?php render_gallery_card($item); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
