<section class="py-16 bg-light">
    <div class="container mx-auto px-4 max-w-6xl">
        <?php render_section_heading($site['about']['title'], null, $site['about']['section_id']); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <?php render_carousel('sobre-carousel', $site['about']['images'], 'relative h-64 md:h-96 overflow-hidden rounded-2xl shadow-xl carousel-container'); ?>

            <div>
                <h3 class="text-3xl font-heading font-bold mb-6 text-dark"><?= e($site['about']['headline']) ?></h3>

                <?php foreach ($site['about']['paragraphs'] as $paragraph): ?>
                    <p class="text-lg text-gray-700 mb-6"><?= e($paragraph) ?></p>
                <?php endforeach; ?>

                <ul class="text-lg text-gray-700 mb-6 list-disc pl-5 space-y-2">
                    <?php foreach ($site['about']['bullets'] as $bullet): ?>
                        <li><?= e($bullet) ?></li>
                    <?php endforeach; ?>
                </ul>

                <div class="grid grid-cols-2 gap-4 mt-8">
                    <?php foreach ($site['about']['counters'] as $counter): ?>
                        <?php render_counter_item($counter); ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
