<?php
declare(strict_types=1);

function render_section_heading(string $title, ?string $subtitle = null, ?string $id = null): void
{
    ?>
    <div class="text-center mb-16"<?php if ($id !== null): ?> id="<?= e($id) ?>"<?php endif; ?>>
        <h2 class="text-4xl font-heading font-bold text-dark"><?= e($title) ?></h2>
        <?php if ($subtitle): ?>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4"><?= e($subtitle) ?></p>
        <?php endif; ?>
        <div class="w-24 h-1 bg-primary mx-auto mt-4"></div>
    </div>
    <?php
}

function render_carousel(string $id, array $images, string $containerClass): void
{
    ?>
    <div class="<?= e($containerClass) ?>" id="<?= e($id) ?>">
        <div class="carousel-slide">
            <?php foreach ($images as $image): ?>
                <div class="carousel-image">
                    <img
                        src="<?= e($image['src']) ?>"
                        alt="<?= e($image['alt']) ?>"
                        class="<?= e($image['class'] ?? 'w-full h-full object-cover') ?>"
                        onclick="openLightbox(this)"
                    >
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (count($images) > 1): ?>
            <button type="button" class="carousel-arrow carousel-arrow-left" onclick="prevSlide('<?= e($id) ?>')" aria-label="Imagem anterior">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button type="button" class="carousel-arrow carousel-arrow-right" onclick="nextSlide('<?= e($id) ?>')" aria-label="Próxima imagem">
                <i class="fas fa-chevron-right"></i>
            </button>
        <?php endif; ?>
    </div>
    <?php
}

function render_gallery_card(array $item): void
{
    ?>
    <article class="relative rounded-2xl overflow-hidden">
        <?php render_carousel($item['id'], $item['images'], 'relative h-64 carousel-container'); ?>
        <div class="p-4 bg-light">
            <h3 class="font-semibold text-dark"><?= e($item['title']) ?></h3>
            <p class="text-sm text-gray-600"><?= e($item['description']) ?></p>
        </div>
    </article>
    <?php
}

function render_feature_card(array $feature): void
{
    ?>
    <article class="feature-card bg-white p-8 rounded-2xl shadow-sm w-full sm:w-2/3 md:w-1/2 lg:w-1/3">
        <div class="flex flex-col items-center text-center">
            <div class="feature-icon w-16 h-16 rounded-full flex items-center justify-center mb-6">
                <i class="<?= e($feature['icon']) ?> text-primary text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-3 text-dark"><?= e($feature['title']) ?></h3>
            <p class="text-gray-600"><?= e($feature['description']) ?></p>
        </div>
    </article>
    <?php
}

function render_counter_item(array $item): void
{
    ?>
    <article class="counter-item bg-white p-4 rounded-xl shadow-sm flex items-center gap-4">
        <div class="bg-primary bg-opacity-20 p-3 rounded-xl">
            <i class="<?= e($item['icon']) ?> text-primary text-2xl"></i>
        </div>
        <div>
            <?php if (!empty($item['value'])): ?>
                <p class="text-xl font-bold text-dark"><?= e($item['value']) ?></p>
            <?php endif; ?>
            <p class="text-gray-600 text-sm"><?= e($item['label']) ?></p>
        </div>
    </article>
    <?php
}

function render_room_card(array $room): void
{
    ?>
    <article class="room-card bg-white rounded-2xl overflow-hidden shadow-lg transition-all duration-300">
        <?php render_carousel($room['id'], $room['images'], 'relative h-64 bg-gray-200 carousel-container'); ?>
        <div class="p-6">
            <h3 class="text-lg font-bold text-dark mb-2"><?= e($room['title']) ?></h3>
            <div class="flex flex-wrap gap-2 mb-3">
                <?php foreach ($room['badges'] as $badge): ?>
                    <span class="px-3 py-1 bg-primary bg-opacity-20 text-primary rounded-full text-sm"><?= e($badge) ?></span>
                <?php endforeach; ?>
            </div>
            <ul class="text-gray-600 mb-4 space-y-1 text-sm">
                <?php foreach ($room['features'] as $feature): ?>
                    <li class="flex items-center gap-2"><i class="fas fa-check-circle text-primary"></i> <?= e($feature) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </article>
    <?php
}

function render_icon_list_item(string $icon, string $text): void
{
    ?>
    <li class="flex items-start gap-3">
        <div class="mt-1 text-primary"><i class="<?= e($icon) ?>"></i></div>
        <span><?= e($text) ?></span>
    </li>
    <?php
}
