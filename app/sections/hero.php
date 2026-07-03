<section class="hero text-white min-h-screen flex items-center justify-center py-20 relative">
    <div class="hero-carousel absolute inset-0">
        <?php foreach ($site['hero']['images'] as $index => $image): ?>
            <div class="hero-image<?= $index === 0 ? ' active' : '' ?>" style="background-image: url('<?= e($image) ?>');"></div>
        <?php endforeach; ?>
    </div>
    <div class="absolute inset-0 hero-overlay"></div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-5xl md:text-7xl font-heading font-bold mb-6 animate-fade-in"><?= e($site['hero']['title']) ?></h1>
            <p class="text-xl md:text-2xl mb-10 font-light max-w-lg mx-auto"><?= e($site['hero']['subtitle']) ?></p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?= e($site['links']['airbnb']) ?>" target="_blank" rel="noopener noreferrer" class="btn-primary bg-primary text-white py-4 px-8 rounded-full text-lg font-semibold shadow-lg flex items-center justify-center gap-2 btn-scroll-animate">
                    <i class="fab fa-airbnb"></i> Reservar Agora
                </a>
                <a href="#gallery" class="btn-primary bg-white text-dark py-4 px-8 rounded-full text-lg font-semibold shadow-lg flex items-center justify-center gap-2 btn-scroll-animate">
                    <i class="fas fa-images"></i> Conhecer o Espaço
                </a>
            </div>

            <div id="scroll-down-indicator" class="absolute bottom-10 left-0 right-0 flex justify-center animate-bounce">
                <button type="button" aria-label="Ir para a próxima seção" class="text-white text-4xl focus:outline-none" onclick="smoothScrollToSection()">
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
    </div>
</section>
