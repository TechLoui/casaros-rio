<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        <?php render_section_heading('Informações Importantes'); ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <article class="bg-light p-8 rounded-2xl">
                <h3 class="text-xl font-heading font-bold text-dark mb-4">Horários</h3>
                <div class="space-y-4">
                    <?php foreach ($site['policies']['hours'] as $hour): ?>
                        <div class="flex justify-between border-b pb-3">
                            <span class="font-medium text-gray-700"><?= e($hour['label']) ?></span>
                            <span class="font-semibold"><?= e($hour['value']) ?></span>
                        </div>
                    <?php endforeach; ?>
                    <div class="pt-2">
                        <p class="text-sm text-gray-600"><?= e($site['policies']['hours_note']) ?></p>
                    </div>
                </div>
            </article>

            <article class="bg-light p-8 rounded-2xl">
                <h3 class="text-xl font-heading font-bold text-dark mb-4">Regras</h3>
                <ul class="space-y-3">
                    <?php foreach ($site['policies']['rules'] as $rule): ?>
                        <?php render_icon_list_item($rule['icon'], $rule['text']); ?>
                    <?php endforeach; ?>
                </ul>
            </article>
        </div>
    </div>
</section>
