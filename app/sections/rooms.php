<section class="py-16 bg-light">
    <div class="container mx-auto px-4 max-w-6xl">
        <?php render_section_heading('Nossos Quartos', 'Suítes espaçosas e confortáveis para sua melhor experiência'); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <?php foreach ($site['rooms'] as $room): ?>
                <?php render_room_card($room); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
