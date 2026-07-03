<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="flex flex-wrap justify-center gap-8">
            <?php foreach ($site['pre_room_features'] as $feature): ?>
                <?php render_feature_card($feature); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
