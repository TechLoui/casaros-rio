<section class="py-16 bg-light">
    <div class="container mx-auto px-4 max-w-6xl">
        <?php render_section_heading('Comodidades e Serviços', 'Tudo que você precisa para uma estadia confortável e memorável'); ?>

        <div class="flex flex-wrap justify-center gap-8">
            <?php foreach ($site['amenities'] as $feature): ?>
                <?php render_feature_card($feature); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
