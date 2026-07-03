<footer class="py-12 bg-dark text-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="text-center">
            <h3 class="text-2xl font-heading font-bold mb-6"><?= e($site['brand']) ?></h3>
            <p class="max-w-xl mx-auto mb-8 text-gray-300"><?= e($site['footer_text']) ?></p>

            <div class="flex justify-center gap-6 mb-8">
                <?php foreach ($site['footer_links'] as $link): ?>
                    <a href="<?= e($link['url']) ?>" target="_blank" rel="noopener noreferrer" class="text-xl hover:text-primary transition" aria-label="<?= e($link['label']) ?>">
                        <i class="<?= e($link['icon']) ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="text-sm text-gray-400">
                <p class="mt-2">&copy; <?= e((string) date('Y')) ?> <?= e($site['brand']) ?>. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>
