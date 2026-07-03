<section class="py-16 bg-light">
    <div class="container mx-auto px-4 max-w-6xl">
        <?php render_section_heading('Localização Privilegiada', 'No coração de Pirenópolis, próximo a todas as atrações'); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-heading font-bold text-dark mb-4">Localização Privilegiada</h3>
                <ul class="space-y-4 text-gray-700 mb-6">
                    <?php foreach ($site['location']['items'] as $item): ?>
                        <?php render_icon_list_item($item['icon'], $item['text']); ?>
                    <?php endforeach; ?>
                </ul>
                <p class="text-gray-600"><?= e($site['location']['description']) ?></p>
            </div>

            <div class="space-y-6">
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <div class="map-container h-64">
                        <iframe
                            src="<?= e($site['location']['map_embed']) ?>"
                            frameborder="0"
                            style="border:0;"
                            allowfullscreen
                            aria-hidden="false"
                            tabindex="0"
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
                <a href="<?= e($site['links']['maps']) ?>" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center gap-2 py-3 px-6 bg-primary hover:bg-secondary text-white rounded-lg transition-colors duration-300">
                    <i class="fas fa-map-marked-alt"></i>
                    Ver localização
                </a>
            </div>
        </div>
    </div>
</section>
