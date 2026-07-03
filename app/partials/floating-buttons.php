<div class="floating-buttons" aria-label="Atalhos de contato">
    <?php foreach ($site['floating_buttons'] as $button): ?>
        <a
            href="<?= e($button['url']) ?>"
            target="_blank"
            rel="noopener noreferrer"
            class="flex items-center justify-center w-16 h-16 rounded-full <?= e($button['class']) ?> text-white shadow-lg transition-all duration-300"
            aria-label="<?= e($button['label']) ?>"
        >
            <i class="<?= e($button['icon']) ?> text-2xl"></i>
        </a>
    <?php endforeach; ?>
</div>
